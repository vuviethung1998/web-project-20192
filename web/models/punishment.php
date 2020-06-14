<?php
require_once('connection.php');
class Punishment {

  public $room_id;
  public $punishment_content;
  public $type;

  function __construct($room_id, $punishment_content, $type) {
    $this->room_id = $room_id;
    $this->punishment_content = $punishment_content;
    $this->type = $type;
  }

  function createPunishment($room_id, $punishment_content, $type, $state) {
    $db = DB::getInstance();
    
    if($type != 'F' && $type != 'I' && $type != 'D') {
      return $state['Invalid type of punishment'];
    }

    $create_punish_query = "INSERT INTO punishment(room_id, punishment_content, type) VALUES
                            (:room_id , :punishment_content, :type)";

    $req = $db->prepare($create_punish_query);
    if($req->execute(array(':room_id' => $room_id, 
      ':punishment_content' => $punishment_content, 
      ':type' => $type))) {
      return 1;
    }
    else return $state['Failed to add punishments!'];
  }

  
  function findPunishmentById($punishment_id, $state) {
    $db = DB::getInstance();

    $find_punishment_by_id_query = "SELECT * FROM punishment WHERE punishment_id='$punishment_id'";
    try {
      $punishment_found = $db->query($find_punishment_by_id_query);
    }
    catch(PDOException $e) {
      print($e->getMessage());
      return $state['Punishment is not found'];
    }
    return $punishment_found->fetch();
  }

  function chooseRandomPunishment($room_id, $state) {
    $db = DB::getInstance();
    
    $punishment_random_query = "SELECT * FROM punishment WHERE room_id = $room_id";
    try {
      $punishment_random_result = $db->query($punishment_random_query);
    }
    catch(PDOException $e) {
      print($e->getMessage());
    }
    $punishment_random_result = $punishment_random_result->fetchAll();
    // print(gettype($punishment_random_result));
    // print(is_array($punishment_random_result));
    // print(count($punishment_random_result));
    // print_r($punishment_random_result);
    $random_num = rand(0, count($punishment_random_result)-1);
    return $punishment_random_result[$random_num];
  }

}

?>