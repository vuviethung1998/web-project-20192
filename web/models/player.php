<?php
require_once('connection.php');
class Player {

  public $player_name;
  public $player_role;
  public $player_state;
  public $room_id;

  function __construct($player_name, $player_role, $player_state, $room_id) {
    $this->player_name = $player_name;
    $this->player_role = $player_role;
    $this->player_state = $player_state;
    $this->room_id = $room_id;
  }

  function create_player($player_name, $player_role, $player_state, $room_id, $state) {
    $db = DB::getInstance();

    $create_punish_query = "INSERT INTO player(player_name, player_role, player_state, room_id) VALUES
                            (:player_name , :player_role, :player_state, :room_id)";

    $req = $db->prepare($create_punish_query);
    try {
      if (empty($player_name)) {
        return $state['Player name is empty string'];
      }
      else if($req->execute(array(':player_name' => $player_name, 
        ':player_role' => $player_role, 
        ':player_state' => $player_state, 
        ':room_id' => $room_id))) {
        return 1;
      }
      
      return $state['Player name of host is duplicated!'];
    }
    catch (PDOException $e) {
      echo "Error: " . $e->getMessage() . "<br />\n";
    }
  }

  function is_host($player_name) {
    $db = DB::getInstance();

    $find_player_query = "SELECT player_role FROM player WHERE player_name='$player_name'";
    $player_role_rows = $db->exec($find_player_query);

    print($player_role_rows->num_rows);

    if($player_role_rows->num_rows > 0) {
      $player_role = $player_role_rows->fetch();
      return $player_role;
    }
    return null;

  }

  function find_players_in_room($room_id) {
    $db = DB::getInstance();

    $find_players_in_room_query = "SELECT player_name FROM player WHERE room_id='$room_id'";
    $players_in_room = $db->query($find_players_in_room_query);
    return $players_in_room->fetchAll();
  }

  function findPlayerById($player_id, $state) {
    $db = DB::getInstance();

    $find_players_by_id_query = "SELECT * FROM player WHERE player_id='$player_id'";
    try {
      $player_found = $db->query($find_players_by_id_query);
    }
    catch(PDOException $e) {
      print($e->getMessage());
      return $state['Player is not found'];
    }
    return $player_found->fetch();
  }

  function chooseRandomPlayer($room_id, $state) {
    $db = DB::getInstance();

    $find_players_in_room_query = "SELECT * FROM player WHERE room_id='$room_id'";
    $players_in_room = $db->query($find_players_in_room_query)->fetchAll();
    
    $random_num = rand(0, count($players_in_room)-1);

    return $players_in_room[$random_num];
  }

}

?>