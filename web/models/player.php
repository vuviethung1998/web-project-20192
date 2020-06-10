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
      if($req->execute(array(':player_name' => $player_name, 
        ':player_role' => $player_role, 
        ':player_state' => $player_state, 
        ':room_id' => $room_id))) {
        return 1;
      }
      else return $state['Failed to add players!'];
    }
    catch (PDOException $e) {
      // echo "Error: " . $e->getMessage() . "<br />\n";
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

}

?>