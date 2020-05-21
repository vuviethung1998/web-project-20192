<?php
class Room
{
    public $room_password;
    public $player_num;
    public $is_closed;

    function __construct( $room_password, $player_num, $is_closed)
    {
        $this->room_password = $room_password;
        $this->player_num = $player_num;
        $this->is_closed = $is_closed;
    }

    static function createRoom($room_password, $player_num, $max_player_num, $is_closed, $state) {
        $db = DB::getInstance();

        // check if exist $room_password -> then call error
        $req_room_existed = $db->query("SELECT * FROM `room` as r WHERE r.room_password = {$room_password}");
        $item = $req_room_existed->fetchAll();
        if (count($item) > 0) {
            return $state["Room existed!"];
        }
        // check if player_num exceeds max_player_num -> then call error
        else if ($player_num >= $max_player_num) {
            return $state["Exceeds max player number!"];
        }
        // query to create Room
        $db->exec("INSERT INTO room(room_password, player_number, is_closed) VALUES  
                        ( {$room_password},{$player_num},{$is_closed} )");
        return 1;
    }

    static function find($room_password, $state)
    {
        $db = DB::getInstance();
        $req = $db->prepare('SELECT * FROM room WHERE room_password = :room_password');
        $req->execute(array('room_password' => $room_password));

        $item = $req->fetch();
        if (count($req->fetchAll()) > 0 )  {
            return 1;
        }
        return $state["Room not found"];
    }
}