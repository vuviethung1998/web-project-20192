<?php session_start();
require_once('connection.php');
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

    static function createRoom($room_password, $player_num, $max_player_num, $is_closed) {
        // check if player_num exceeds max_player_num -> then call error
        if (empty($room_password))  {
            return 8; // check state.php to get error code
        }
        else if (empty($player_num)) {
            return 9;
        }
        else if (!is_numeric($room_password)) {
            return 10;
        }
        else if (!is_numeric($player_num)) {
            return 11;
        }
        else if ((int)$player_num >= $max_player_num) {
            return 3;
        }
        
        $db = DB::getInstance();
        // check if exist $room_password -> then call error
        $req_room_existed = $db->query("SELECT * FROM `room` as r WHERE r.room_id = {$room_password}");
        $item = $req_room_existed->fetchAll();
        if (count($item) > 0) {
            return 2;
        }
  
        // query to create Room
        $db->exec("INSERT INTO room(room_id, player_number, is_closed) VALUES  
                        ( {$room_password},{$player_num},{$is_closed} )");
        return 1;
    }

    static function find($room_password, $state)
    {
        // print("starting finding room");
        // print("Room password: " . $room_password);
        $db = DB::getInstance();
        $req = $db->prepare("SELECT * FROM room WHERE `room_id` = :room_password");
        $req->execute(array(':room_password' => $room_password));

        $item = $req->fetch();
        // print_r($item);
        if ($item != NULL )  {
            // print('find room successfully');
            return 1;
        }
        else if (empty($room_password)) {
            return $state["Room password can't be blank!"];
        }
        else if (!is_int($room_password)) {
            return $state["Room password must be number!"];
        }

        return $state["Room not found"];
    }
}