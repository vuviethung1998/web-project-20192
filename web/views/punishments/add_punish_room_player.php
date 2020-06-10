<div class="bg-add-punish">
  <form action="index.php" method="POST">
    <button class="title-room">Punishhhh</button>
  </form>
  <div class="passroom">
    id: <?php print($_SESSION['room_id']) ?>
  </div>
  <div>
    <form action="index.php?controller=punishments&action=create_punishment_player" method="POST">
      <table style="margin: auto; padding-top: 30px">
        <tr>
          <td style="text-align: right; padding-bottom: 15px; padding-right: 10px;" class="text-room">
            player
          </td>
          <td>
            <input type="text" name="player_name" style="height: 30px; border-style: solid" />
          </td>
        </tr>
      </table>
      <table style="margin: auto;padding-top: 10px" id="table1">
        <tr>
          <td>
            <input type="text" name="funny_punishment" />
          </td>
          <td>
            <input type="text" name="interesting_punishment" />
          </td>
          <td>
            <input type="text" name="dangerous_punishment" />
          </td>
        </tr>
        <tr>
          <td class="text-room">
            <p>funny punishment</p>
          </td>
          <td class="text-room">
            <p>interesting punishment</p>
          </td>
          <td class="text-room">
            <p>dangerous punishment</p>
          </td>
        </tr>
      </table>
      <button class="bbutton-room">ready</button>
    </form>
    <form action="" method="POST">
      <button class="aboutbutton">about</button>
    </form>
    <form action="" method="POST">
      <button class="rulebutton">rule</button>
    </form>
  </div>
</div>