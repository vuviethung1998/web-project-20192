<?php session_start();
require_once('connection.php');
class Room
{
    public $room_password;
    public $player_num;
    public $is_closed;

    function __construct($room_password, $player_number_now, $maximum_player_number, $is_closed)
    {
        $this->room_password = $room_password;
        $this->player_number_now = $player_number_now;
        $this->maximum_player_number = $maximum_player_number;
        $this->is_closed = $is_closed;
    }

    static function createRoom($room_password, $player_number_now, $maximum_player_number, $maximum_player_number_in_config , $is_closed, $state) {
        // check if player_num exceeds max_player_num -> then call error
        if (empty($room_password))  {
            return $state["Room password can\'t be blank!"]; // check state.php to get error code
        }
        else if (empty($maximum_player_number)) {
            return $state["Player number can\'t be blank!"];
        }
        else if (!is_numeric($room_password)) {
            return $state['Room password must be number!'];
        }
        else if (!is_numeric($maximum_player_number)) {
            return $state['Room number player must be number!'];
        }
        else if ((int)$maximum_player_number >= $maximum_player_number_in_config) {
            return $state['Exceeds max player number!'];
        }
        
        $db = DB::getInstance();
        // check if exist $room_password -> then call error
        $req_room_existed = $db->query("SELECT * FROM `room` as r WHERE r.room_id = {$room_password}");
        $item = $req_room_existed->fetchAll();
        if (count($item) > 0) {
            return $state['Room existed!'];
        }
  
        // query to create Room
        $db->exec("INSERT INTO room(room_id, player_number_now, maximum_player_number, is_closed) VALUES  
                        ( $room_password,$player_number_now, $maximum_player_number, $is_closed )");
        return 1;
    }

    static function find($room_password, $maximum_player_number_in_config, $state)
    {
        if (empty($room_password))  {
            return 8; // check state.php to get error code
        }
        else if (!is_numeric($room_password)) {
            return 10;
        }
        // print("starting finding room");
        // print("Room password: " . $room_password);
        $db = DB::getInstance();
        $req = $db->prepare("SELECT * FROM room WHERE `room_id` = :room_password");
        $req->execute(array(':room_password' => $room_password));

        $item = $req->fetch();
        $cur_num_player = $item['player_number_now'];
        $maximum_player_number = $item['maximum_player_number'];
        echo "<script type=\"text/javascript\">console.log('Debug Objects: " . $cur_num_player . "' );</script>";
        // print_r($item);
        if ($item == NULL )  {
            // print('room not found');
            return $state['Room not found'];
        }
        else if ($cur_num_player == $maximum_player_number) {
            return $state['Room is full!'];
        }

        return 1; // find room successfully
    }

    static function update_a_player_in_room($room_password, $state) {
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

    function closingRoom($room_id, $state) {
        $db = DB::getInstance();
        $update_room_query = "UPDATE room SET is_closed=1 WHERE room_id=$room_id";
        try {
            $req = $db->exec($update_room_query);
        }
        catch(PDOException $e) {
            print($e->getMessage());
            return $state['Fail to close room'];
        }
        return 1;
    }
}