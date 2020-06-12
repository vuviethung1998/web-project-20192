<?php

session_start();
require_once('connection.php');

class Round {

    public $round_id;
    public $round_num;
    public $punishment_id;
    public $player_id;
    public $room_id;

    function __construct($round_id, $round_num, $punishment_id, $player_id, $room_id) {
        $this->round_id = $round_id;
        $this->round_num = $round_num;
        $this->punishment_id = $punishment_id;
        $this->player_id = $player_id;
        $this->room_id = $room_id;
    }

    static function createRound($round_id, $round_num, $punishment_id, $player_id, $room_id) {
        $db = DB::getInstance();
          
        // query to create Round
        $db->exec("INSERT INTO round(round_id, round_num, punishment_id, player_id, room_id) VALUES  
                        ( {$round_id},{$round_num},{$punishment_id}, {$player_id}, {$room_id} )");
        return 1;

    }

}
