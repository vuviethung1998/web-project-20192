<?php
require_once('controllers/base_controller.php');
require_once('models/punishment.php');

class PunishmentsController extends BaseController {

  function __construct() {
    $this->folder = 'punishments';
  }

  function render_punishment_room() {
    $this->render('punishment_room');
  }

  function create_punishment() {
    $arr = include('config/config.php');
    $state = include('config/state.php');

    $funny_punishment = $_POST['funny_punishment'];
    $interesting_punishment = $_POST['interesting_punishment'];
    $dangerous_punishment = $_POST['dangerous_punishment'];

    $create_funny_punishment_result = Punishment::createPunishment($room_id, $funny_punishment, 'F', $state);
    $create_interesting_punishment_result = Punishment::createPunishment($room_id, $funny_punishment, 'I', $state);
    $create_dangerous_punishment_result = Punishment::createPunishment($room_id, $funny_punishment, 'D', $state);

    if($create_funny_punishment_result == 1 &&
      $create_interesting_punishment_result == 1 &&
      $create_dangerous_punishment_result == 1) {
        // $this->render('main.php');
      }

  }

}

?>