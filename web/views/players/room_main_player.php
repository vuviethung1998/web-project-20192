<?php
  $room_password = $_SESSION['room_id'];
  $players_in_room = Player::find_players_in_room($room_password);
?>
<div class="bg-room-main">
  <div class="title-room-main">
    <form action="intro_room_v3.html" method="POST">
      <button class="title__button">let's punishhh now!!!</button>
    </form>
  </div>
  <div class="passroom">
    id:
  </div>
  <div>
    <table id="table__general">
        <?php
          $i = 0;
          print('<tr>');
          foreach($players_in_room as $player) {
            print('<td>');
            print('<table id="table__list">');
            print('<tr>');
            print('<td class="imgborder">');
            print('<img src="../../assets/images/icon.png" alt="Player" width="100" height="100">');
            print('</td>');
            print('</tr>');
            print('<tr>');
            print('<td class="text-room-main">' . $player['player_name'] . '</td>');
            print('</tr>');
            print('</table>');
            print('</td>');
            $i++;
            if($i == 5) {
              print('</tr>');
              print('<tr>');
              $i = 0;
            }
          }
        ?>
        <!-- <tr>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main"><?php print($giap) ?></td>
            </tr>
          </table>
        </td>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 2</td>
            </tr>
          </table>
        </td>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 2</td>
            </tr>
          </table>
        </td>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 2</td>
            </tr>
          </table>
        </td>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 2</td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 1</td>
            </tr>
          </table>
        </td>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 2</td>
            </tr>
          </table>
        </td>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 2</td>
            </tr>
          </table>
        </td>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 2</td>
            </tr>
          </table>
        </td>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 2</td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 1</td>
            </tr>
          </table>
        </td>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 2</td>
            </tr>
          </table>
        </td>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 2</td>
            </tr>
          </table>
        </td>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 2</td>
            </tr>
          </table>
        </td>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 2</td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 1</td>
            </tr>
          </table>
        </td>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 2</td>
            </tr>
          </table>
        </td>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 2</td>
            </tr>
          </table>
        </td>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 2</td>
            </tr>
          </table>
        </td>
        <td>
          <table id="table__list">
            <tr>
              <td class="imgborder"><img src="../../assets/images/icon.png" alt="Player" width="100" height="100"></td>
            </tr>
            <tr>
              <td class="text-room-main">Player 2</td>
            </tr>
          </table>
        </td>
      </tr> -->
    </table>

    <form action="" method="POST">
      <button class="aboutbutton">about</button>
    </form>
    <form action="" method="POST">
      <button class="rulebutton">rule</button>
    </form>
  </div>
</div>