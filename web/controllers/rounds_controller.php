<?php
require_once('controllers/base_controller.php');
require_once('models/round.php');

class RoundsController extends BaseController {
    function __construct()
    {
        $this->folder = 'rounds';
    }
    function renderResultPage() {
      $state = include ('config/state.php');
      $room_password = $_SESSION['room_id'];

      $create_round_result = Round::createRound($room_password, $state);

      $this->render('result');
    }
}
?>