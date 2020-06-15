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
        $room_password = htmlentities($_POST['room_password']);
        $maximum_player_num = htmlentities($_POST['player_num']);
        $maximum_player_number_in_config = $arr['max_num_players'];
        $is_closed = 0;
        $player_number_now = 0;
        // print("start creating room");
        $room_state = Room::createRoom($room_password, $player_number_now, $maximum_player_num, $maximum_player_number_in_config, $is_closed, $state);

        $_SESSION['room_id'] = $room_password;
        $_SESSION['room_state'] = $room_state;

        // print("finish creating room");
        // get state: 1 -> create room succeeded, other -> error
        if ($room_state == 1) {
            $this->folder = 'punishments';
            $this->render('add_punish_room_host');
        } else {
            $this->folder = 'rooms';
            // // lay state cua room
            
            //render trang 
           $this->render('create_room');
            // $key =  array_search($room_state,  $state );
//            echo "<script type=\"text/javascript\">console.log('Debug Objects: " . $room_state . "' );</script>";
            // unset($_SESSION['room_state']);
            // $this->function_alert($key);
        }

    }   

    public function enter_room() {
        $arr = include ('config/config.php');
        $state = include ('config/state.php');

        $maximum_player_number_in_config = $arr['max_num_players'];
        $room_password = htmlentities($_POST['room_password']);

    
        $room_state = Room::find($room_password,  $maximum_player_number_in_config, $state);

        $_SESSION['room_id'] = $room_password;
        $_SESSION['room_state'] = $room_state;
        if ($room_state == 1) {
            $this->folder = 'punishments';
            $this->render('add_punish_room_player');
        }
        else {
            echo "<script type=\"text/javascript\">console.log('Debug Objects: " . $room_state . "' );</script>";
            $this->folder = 'rooms';
            $this->render('enter_room');
        }
    }
}