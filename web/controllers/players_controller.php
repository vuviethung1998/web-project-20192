<?php
require_once('controllers/base_controller.php');
require_once('models/punishment.php');
require_once('models/player.php');

class PlayersController extends BaseController {

  function __construct() {
    $this->folder = 'player';
  }

  function render_punishment_room() {
    $this->render('punishment_room');
  }
}
?>