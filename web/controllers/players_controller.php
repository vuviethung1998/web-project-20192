<?php
require_once('controllers/base_controller.php');
require_once('models/punishment.php');
require_once('models/player.php');

class PlayersController extends BaseController {

  function __construct() {
    $this->folder = 'players';
  }
  
  public function render_room_main_host() {
    $this->render('room_main_host');
  }

  public function render_room_main_player() {
      $this->render('room_main_player');
  }

  function render_punishment_room() {
    $this->render('punishment_room');
  }

  function find_players_in_room() {
    $players_in_room = Player::findPlayersInRoom($room_password);
    return $players_in_room;
  }

  function get_player($player_id, $state) {
    $player = Player::findPlayerById($player_id, $state);
    return $player;
  }
}
?>