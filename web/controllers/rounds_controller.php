<?php
require_once('controllers/base_controller.php');
require_once('models/round.php');
require_once('models/room.php');

class RoundsController extends BaseController {
    function __construct()
    {
        $this->folder = 'rounds';
    }
    function renderResultPageHost() {
      $state = include ('config/state.php');
      $room_id = $_SESSION['room_id'];

      $create_round_result = Round::createRound($room_id, $state);
      // print($create_round_result);
      $closing_room_result = Room::closingRoom($room_id, $state);
      // print($closing_room_result);
      if($create_round_result != NULL && $closing_room_result == 1) {
        $this->render('result');
        // sleep(60);
        // $this->folder = 'players';
        // $this->render('room_main_host');
      }
      
    }

    function renderResultPagePlayer() {
      $state = include ('config/state.php');
      $room_id = $_SESSION['room_id'];

      $this->render('result');

        // sleep(60);
        // $this->folder = 'players';
        // $this->render('room_main_player');
    }

    function getRound($room_id, $state) {
      $state = include ('config/state.php');
      $room_id = $_SESSION['room_id'];

      $result_data = Round::findRoundById($room_id, $state);
      return $result_data;
    }
}
?>