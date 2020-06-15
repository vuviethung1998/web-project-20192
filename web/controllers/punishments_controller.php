<?php
require_once('controllers/base_controller.php');
require_once('models/punishment.php');
require_once('models/player.php');

class PunishmentsController extends BaseController {

  function __construct() {
    $this->folder = 'punishments';
  }

  function render_punishment_room() {
    $this->render('punishment_room');
  }

  function create_punishment_host() {
    $arr = include('config/config.php');
    $state = include('config/state.php');
    
    $room_id = $_SESSION['room_id'];

    $player_name = $_POST['player_name'];
    $player_role = 'host';
    $player_state = 'active';

    $create_player_result = Player::create_player($player_name, $player_role, $player_state, $room_id, $state);
    if($create_player_result != 1) {
      print('The player name of host is duplicated!');
      return;
    }

    $_SESSION['player_name'] = $player_name;

    $funny_punishment = $_POST['funny_punishment'];
    // print($funny_punishment);
    $interesting_punishment = $_POST['interesting_punishment'];
    // print($interesting_punishment);
    $dangerous_punishment = $_POST['dangerous_punishment'];
    // print($dangerous_punishment);

    $punishment_array = array('funny_punishment' => $funny_punishment, 
                              'interesting_punishment' => $interesting_punishment, 
                              'dangerous_punishment' => $dangerous_punishment);

    $create_punishment_result = PunishmentsController::create_three_types_of_punishments($punishment_array, $room_id, $state);

    if($create_punishment_result) {
      $this->folder = 'players';
      $this->render('room_main_host');
    }
    else {
      print("error");
    }
  }

  function create_punishment_player() {
    $arr = include('config/config.php');
    $state = include('config/state.php');
    
    $room_id = $_SESSION['room_id'];
    
    $player_name = $_POST['player_name'];
    $player_role = 'player';
    $player_state = 'active';

    $create_player_result = Player::create_player($player_name, $player_role, $player_state, $room_id, $state);
    if($create_player_result != 1) {
      print('The player name is duplicated!');
      return;
    }

    $_SESSION['player_name'] = $player_name;

    $funny_punishment = $_POST['funny_punishment'];
    // print($funny_punishment);
    $interesting_punishment = $_POST['interesting_punishment'];
    // print($interesting_punishment);
    $dangerous_punishment = $_POST['dangerous_punishment'];
    // print($dangerous_punishment);

    $punishment_array = array('funny_punishment' => $funny_punishment, 
                              'interesting_punishment' => $interesting_punishment, 
                              'dangerous_punishment' => $dangerous_punishment);

    $create_punishment_result = PunishmentsController::create_three_types_of_punishments($punishment_array, $room_id, $state);

    if($create_punishment_result) {

      $players_in_room = Player::findPlayersInRoom($room_id);

      $this->folder = 'players';
      $this->render('room_main_player');
    }
    else {
      print("error");
    }
  }

  function create_three_types_of_punishments($punishment_array, $room_id, $state) {
    extract($punishment_array);
    
    // print($funny_punishment);
    // print($interesting_punishment);
    // print($dangerous_punishment);

    $create_funny_punishment_result = Punishment::createPunishment($room_id, $funny_punishment, 'F', $state);
    $create_interesting_punishment_result = Punishment::createPunishment($room_id, $interesting_punishment, 'I', $state);
    $create_dangerous_punishment_result = Punishment::createPunishment($room_id, $dangerous_punishment, 'D', $state);

    if($create_funny_punishment_result == 1 &&
      $create_interesting_punishment_result == 1 &&
      $create_dangerous_punishment_result == 1) {
        return true;
      }
    else {
      print($create_funny_punishment_result);
      print($create_interesting_punishment_result);
      print($create_dangerous_punishment_result);
      return false;
    }

  }

  function getPunishment($punishment_id, $state) {
    $punishment = Punishment::findPunishmentById($punishment_id, $state);
    return $punishment;
  }

}

?>