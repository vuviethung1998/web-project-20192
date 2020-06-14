<?php session_start();
require_once('connection.php');
require_once('punishment.php');
require_once('player.php');
class Round
{
    public $round_num;
    public $punishment_id;
    public $player_id;
    public $room_id;

    function __construct($round_num, $punishment_id, $player_id, $room_id)
    {
        $this->round_num = $round_num;
        $this->punishment_id = $punishment_id;
        $this->player_id = $player_id;
        $this->room_id = $room_id;
    }

    function createRound($room_id, $state) {
      $db = DB::getInstance();
      // Check if round exists in same room
      $room_existed_query = "SELECT * FROM `round` WHERE round.room_id = {$room_id}";
      try {
        $room_existed_result = $db->query($room_existed_query);
      }
      catch(PDOException $e) {
        print($e->getMessage());
      }

      $room_existed_result = $room_existed_result->fetchAll();
      $round_num = count($room_existed_result);
      // print($round_num);

      $random_punishment = Punishment::chooseRandomPunishment($room_id, $state);
      $random_punishment_id = $random_punishment['punishment_id'];
      // print_r($random_punishment);

      $random_player = Player::chooseRandomPlayer($room_id, $state);
      $random_player_id = $random_player['player_id'];
      // print_r($random_player);

      if($round_num == 0){
        $round_create_query = "INSERT INTO round(punishment_id, player_id, room_id) VALUES ($random_punishment_id, $random_player_id, $room_id)";
        try {
          $round_create_result = $db->query($round_create_query);
          return 1;
        }
        catch(PDOException $e) {
          print($e->getMessage());
        }
      }
      else {
        return $state['The room is already!'];
      }
    }

    function findRoundById($room_id, $state) {
      $db = DB::getInstance();

      $find_round_query = "SELECT * FROM `round` WHERE room_id = {$room_id}";

      try {
        $find_round_result = $db->query($find_round_query);
      }
      catch(PDOException $e) {
        print($e->getMessage());
        return $state['Round not found'];
      }
      $find_round_result = $find_round_result->fetch();
      // print_r($find_round_result);
      if($find_round_result) {
        return $find_round_result;
      }
      return $state['Round not found'];
    }
}
?>