<?php
require_once('controllers/base_controller.php');
require_once('models/room.php');

class RoomController extends BaseController {
    function __construct()
    {
        $this->folder = 'room';
    }

    public function createRoom() {
//        $room = Room::createRoom($_GET['room_password'], $_GET['player_num'], $_GET['max_player_num'], 0);
        $this->render('create_room');
    }

    public function enterRoom() {
        // get state of finding room: 0 - room not found, 1- room found
        $room = Room::find($_GET['room_password']);
        return $room;
    }
}