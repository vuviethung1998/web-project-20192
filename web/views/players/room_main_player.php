<?php
  require_once('controllers/players_controller.php');
  $room_password = $_SESSION['room_id'];
  $players_in_room = PlayersController::find_players_in_room($room_password);
?>
<script type="text/javascript">
  var room_id = <?php echo $_SESSION['room_id'] ?>;
  var players;
  console.log(room_id);
  setInterval(() => {
    // var oldTable = document.getElementById('table__general');
    // while (oldTable.hasChildNodes()) {
    //   oldTable.removeChild(oldTable.childNodes[0]);
    // }

    var table = document.getElementById('table__general');
    while (table.hasChildNodes()) {
      table.removeChild(table.childNodes[0]);
    }

    var xhttpGetPlayers = new XMLHttpRequest();
    xhttpGetPlayers.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        players = JSON.parse(this.responseText);
        console.log(players);
        console.log(typeof players);
        var index = 0;
        var j;
        var stop = false;
        for(var trIndex = 0; trIndex < players.length; trIndex++){
          console.log(players[trIndex]);
          var row = table.insertRow(trIndex);
          console.log(row);
          console.log(111);
          for(j = 0; j < 5; j++) {
            if(index+j > players.length) {
              stop = true;
              break;
            }
            var cell = row.insertCell(j);
            cell.innerHTML = '<table id="table__list">'
            + '<tr>'
            + '<td class="imgborder">'
            + '<img src="../../assets/images/icon.png" alt="Player" width="100" height="100">'
            + '</td>'
            + '</tr>'
            + '<tr>'
            + '<td class="text-room-main">' + players[j+index] + '</td>'
            + '</tr>'
            + '</table>';
          }
          if(stop == true) {
            break;
          }
          index+=5;
        }
        table.rows[trIndex].deleteCell(table.rows[trIndex].cells.length-1);
      }
    };
    xhttpGetPlayers.open("POST", "../../ajax/getPlayers.php?room_id=" + room_id, true);
    xhttpGetPlayers.send();

    var xhttpIsRoomStarted = new XMLHttpRequest();
    xhttpIsRoomStarted.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var response = JSON.parse(this.responseText);
        console.log(response);
        console.log(response['is_closed']);
        var isRoomStart = parseInt(response['is_closed']);
        console.log(typeof(isRoomStart));
        if(isRoomStart) {
          location.replace("http://localhost:8082/index.php?controller=rounds&action=renderResultPagePlayer")
        }
      }
    }
    xhttpIsRoomStarted.open("POST", "../../ajax/getIsRoomStarted.php?room_id=" + room_id, true);
    xhttpIsRoomStarted.send();
  }, 3000);
</script>
<div class="bg-room-main">
  <div class="title-room-main">
    <form action="intro_room_v3.html" method="POST">
      <button class="title__button">let's punishhh now!!!</button>
    </form>
  </div>
  <div class="passroom">
    id: <?php print($_SESSION['room_id']) ?>
  </div>
  <div>
    <table id="table__general">
    </table>

    <form action="" method="POST">
      <button class="aboutbutton">about</button>
    </form>
    <form action="" method="POST">
      <button class="rulebutton">rule</button>
    </form>
  </div>
</div>