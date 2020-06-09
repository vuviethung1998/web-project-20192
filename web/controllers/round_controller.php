<?php

require_once('controllers/base_controller.php');
require_once('models/round.php');

class RoundController extends BaseController {

    function __construct() {
        $this->folder = 'round';
    }

    public function render_create_round() {
        $this->render('create_round');
    }

    public function create_round() {
        $arr = include ('config/config.php');
        $state = include ('config/state.php');
        
        $room_password = $_POST['room_id'];
        $player_num = $_POST['player_num'];
        $max_player_num = $arr['max_num_players'];
        $is_closed = 0;
        // print("start creating room");
        $room_state = Room::createRoom($room_password, $player_num, $max_player_num, $is_closed, $state);

        $_SESSION['room_id'] = $room_password;

        // print("finish creating room");
        // get state: 1 -> create room succeeded, other -> error
        if ($room_state == 1) {
            $this->render('add_punish_room_host');
        }
    }

    public function enter_room() {
        $room_password = $_POST['room_password'];
        $state = include ('config/state.php');

        $_SESSION['room_id'] = $room_password;

        $room_state = Room::find($room_password, $state);
        if ($room_state == 1) {
            $this->render('add_punish_room_player');
        }
    }

}
