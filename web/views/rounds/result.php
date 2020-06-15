<?php
  require_once('controllers/rounds_controller.php');
  require_once('controllers/players_controller.php');
  require_once('controllers/punishments_controller.php');

  $state = include ('config/state.php');
  $room_id = $_SESSION['room_id'];

  $result_data = RoundsController::getRound($room_id, $state);
  // print($result_data);

  $player_id = $result_data['player_id'];
  $player = PlayersController::get_player($player_id, $state);
  // print_r($player);
  // print($player['player_name']);
  $player_name = $player['player_name'];

  $punishment_id = $result_data['punishment_id'];
  $punishment = PunishmentsController::getPunishment($punishment_id, $state);
  // print_r($punishment);
  // print($punishment['punishment_content']);
  $punishment_content = $punishment['punishment_content'];

  // print_r($result_data);
  // print($player_id);
  // print($punishment_id);
?>
<div class="bg-result-page">
      <div
        style="
          margin: 130px 400px;
          width: 500;
          height: 400;
          border: 5px solid #fc4c86;
          border-radius: 200px;
        "
      >
        <div class="text-result-page" style="border: none;">
          <p style="font-size: 64px;">tada!!!</p>
        </div>
        <div class="text-result-page" style="border: none; padding-top: 20px;">
          here comes the punishment for ~
        </div>
        <div
          style="
            margin: auto;
            width: 200;
            height: 50;
            border: 1px solid #fc4c86;
            border-radius: 15px;
            margin-top: 20px;
          "
        ><p class="text-result-page" style="border: 0px;"><?php print($player_name) ?></p></div>
        <div
          style="
            margin: auto;
            width: 300;
            height: 100;
            border: 1px solid #fc4c86;
            border-radius: 15px;
            margin-top: 20px;
          "
        ><p class="text-result-page" style="border: 0px;"><?php print($punishment_content) ?></p></div>
        <table>
          <tr>
            <form action="room_main_player.html" method="POST">
              <button
                class="startbutton"
                style="
                  position: relative;
                  font-size: 42px;
                  bottom: 0;
                  left: 230px;
                "
              >
                ok
              </button>
            </form>
            <form action="room_main_host.html" method="POST">
              <button
                class="startbutton"
                style="
                  position: relative;
                  font-size: 42px;
                  bottom: 0;
                  left: 230px;
                  padding-left: 20px;
                "
              >
                restart
              </button>
            </form>
          </tr>
        </table>
      </div>
    </div>