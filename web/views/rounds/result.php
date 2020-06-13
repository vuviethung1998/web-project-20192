<?php
  require_once('models/round.php');
  require_once('models/player.php');
  require_once('models/punishment.php');

  $state = include ('config/state.php');
  $room_id = $_SESSION['room_id'];

  $result_data = Round::findRoundById($room_id, $state);
  $result_data = $result_data[0];

  $player_id = $result_data['player_id'];
  $player = Player::findPlayerById($player_id, $state);
  // print_r($player);
  // print($player['player_name']);
  $player_name = $player['player_name'];

  $punishment_id = $result_data['punishment_id'];
  $punishment = Punishment::findPunishmentById($punishment_id, $state);
  // print_r($punishment);
  // print($punishment['punishment_content']);
  $punishment_content = $punishment['punishment_content'];

  // print_r($result_data);
  // print($player_id);
  // print($punishment_id);
?>
<div style="margin: auto; width: 500; height: 400; border: 5px solid #FC4C86; border-radius: 50px">
  <div class="text-result-page" style="border: none">
    <p style="font-size: 64px">Result!!!</p>
  </div>
  <div class="text-result-page" style="border: none; padding-top: 20px">Here comes the punishment for ~ </div>
  <div style="margin: auto; width: 200; height: 50; border: 1px solid #FC4C86; border-radius: 15px; margin-top: 20px ">
  <p class="text-result-page" style="border: 0px;"><?php print($player_name) ?></p>
  </div>
  <div style="margin: auto; width: 300; height: 100; border: 1px solid #FC4C86; border-radius: 15px; margin-top: 20px ">
  <p class="text-result-page" style="border: 0px;"><?php print($punishment_content) ?></p>
  </div>
  <table>
    <tr>
      <form action="index.php" method="POST">
        <button class="startbutton" style="position: relative; font-size: 42px; bottom: 0; left: 230px;">Return the home page</button>
      </form>
    </tr>
  </table>
</div>