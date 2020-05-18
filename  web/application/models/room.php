<?php
    include ("../../connection.php")
?>
<?php
class Room
{
    public $room_password;
    public $player_num;
    public $max_player_num;
    public $is_closed;

    function __construct( $room_password, $player_num, $max_player_num,$is_closed)
    {
        $this->room_password = $room_password;
        $this->player_num = $player_num;
        $this->max_player_num = $max_player_num;
        $this->is_closed = $is_closed;
    }

    public function createRoom() {
        $db = DB::getInstance();

        // check if exist $room_password -> then call error
        $req_room_existed = $db->query("SELECT * FROM `Room` as r WHERE r.RoomPassword = {$this->room_password}");
        $item = $req_room_existed->fetchAll();
        if (count($item) > 0) {
            return "Room existed!";
        }
        // check if player_num exceeds max_player_num -> then call error
        else if ($this->player_num >= $this->max_player_num) {
            return "Exceeds max player numbers!";
        }
        // query to create Room
        $db->exec("INSERT INTO Room(RoomPassword, PlayerNumber, Is_closed) VALUES  
                        ( {$this->room_password},{$this->player_num},{$this->is_closed} )");
        return 1;
    }
}