<?php
require_once('controllers/base_controller.php');
require_once('models/room.php');

class RoomsController extends BaseController {
    function __construct()
    {
        $this->folder = 'rooms';
    }

    public function render_create_room() {
        $this->render('create_room');
    }

    public function render_enter_room() {
        $this->render('enter_room');
    }

    public function create_room() {
        $arr = include ('config/config.php');

        $state = include ('config/state.php');
        $room_password = $_POST['room_password'];
        $player_num = $_POST['player_num'];
        $max_player_num = $arr['max_num_players'];
        $is_closed = 0;

        $room_state = Room::createRoom($room_password, $player_num, $max_player_num, $is_closed, $state);

        // get state: 1 -> create room succeeded, other -> error
        if ($room_state == 1) {
            $this->render('main_room');
        }

    }

    public function enter_room() {
        $room_password = $_POST['room_password'];
        $state = include ('config/state.php');

        $room_state = Room::find($room_password, $state);
        if ($room_state == 1) {
            $this->render('main_room');
        }
    }
}