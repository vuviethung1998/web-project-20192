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
        $maximum_player_num = $_POST['player_num'];
        $maximum_player_number_in_config = $arr['max_num_players'];
        $is_closed = 0;
        $player_number_now = 1;
        // print("start creating room");
        $room_state = Room::createRoom($room_password, $player_number_now, $maximum_player_num, $maximum_player_number_in_config, $is_closed, $state);

        $_SESSION['room_id'] = $room_password;

        // print("finish creating room");
        // get state: 1 -> create room succeeded, other -> error
        if ($room_state == 1) {
            $this->folder = 'punishments';
            $this->render('add_punish_room_host');
        }

    }

    public function enter_room() {
        $room_password = $_POST['room_password'];
        $state = include ('config/state.php');

        $_SESSION['room_id'] = $room_password;

        $found_room = Room::find($room_password, $state);
        if ($found_room) {
            // print_r($found_room);
            $enter_room_result = Room::update_a_player_in_room($room_password, $state);
            if($enter_room_result == 1) {
                $this->folder = 'punishments';
                $this->render('add_punish_room_player');
            }
        }
    }
}