<?php

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
    
    if($type != 'F' || $type != 'I' || $type != 'D') {
      return $state['Invalid type of punishment'];
    }

    $create_punish_query = "INSERT INTO punishment(room_id, punishment_content, type) VALUES
                            ( {$room_id} , {$punishment_content}, {$type})";

    if($db->exec($create_punish_query)) {
      return 1;
    }
    else return 0;
  }

}

?>