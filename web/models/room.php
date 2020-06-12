<?php session_start();
require_once('connection.php');
class Room
{
    public $room_password;
    public $player_number_now;
    public $maximum_player_number;
    public $is_closed;

    function __construct( $room_password, $player_number_now, $maximum_player_number, $is_closed)
    {
        $this->room_password = $room_password;
        $this->player_number_now = $player_number_now;
        $this->maximum_player_number = $maximum_player_number;
        $this->is_closed = $is_closed;
    }

    static function createRoom($room_password, $player_number_now, $maximum_player_number, $maximum_player_number_in_config , $is_closed, $state) {
        $db = DB::getInstance();

        // check if exist $room_password -> then call error
        $req_room_existed = $db->query("SELECT * FROM `room` as r WHERE r.room_id = {$room_password}");
        $item = $req_room_existed->fetchAll();
        if (count($item) > 0) {
            return $state["Room existed!"];
        }
        // check if player_num exceeds max_player_num -> then call error
        else if ($maximum_player_number >= $maximum_player_number_in_config) {
            return $state["Exceeds max player number!"];
        }
        // query to create Room
        $db->exec("INSERT INTO room(room_id, player_number_now, maximum_player_number, is_closed) VALUES  
                        ( $room_password,$player_number_now, $maximum_player_number, $is_closed )");
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
            return $item;
        }
        return $state["Room not found"];
    }
    function update_a_player_in_room($room_password, $state) {
        $db = DB::getInstance();
        $update_room_query = "UPDATE room SET player_number_now=player_number_now+1 WHERE room_id=$room_password";
        try {
            $req = $db->exec($update_room_query);
        }
        catch(PDOException $e) {
            print($e->getMessage());
        }
        return 1;
    }
}