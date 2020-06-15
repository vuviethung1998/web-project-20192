<?php
  $room_password = $_SESSION['room_id'];
  $players_in_room = Player::find_players_in_room($room_password);
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
    <form>
      <button class="title__button">let's punishhh now!!!</button>
    </form>
  </div>
  <div class="passroom">
    id: <?php print($_SESSION['room_id']) ?>
  </div>
  <div>
    <table id="table__general">
    </table>

    <button class="aboutbutton" onclick="aboutButtonClick()">about</button>
    
    <button class="rulebutton"  onclick="ruleButtonClick()"> rule</button>

    <!-- popup rule -->
    <div id="ruleModal" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close" onclick="closeModal()">&times;</span>
          <h2 id="modal-title">RULE</h2>
        </div>
        <div class="modal-body">
          <div>
            <table id="rule-table">
              <tr>
                <td class="rule-square" id="s1">Trừng phạt người bạn</td>
                <td class="rule-square" id="s2">Trừng phạt Hưng</td>
                <td class="rule-square" id="s3">Trừng phạt Giáp</td>
              </tr>
              <tr>
                <td class="rule-square" id="s4">Trừng phạt Nam</td>
                <td class="rule-square" id="s5">Trừng phạt Chỉnh</td>
                <td class="rule-square" id="s6">Trừng phạt ai đấy</td>
              </tr>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <h3>Design by ..... team</h3>
        </div>
      </div>
    </div>

    <div id="aboutModal" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close" onclick="closeModal()">&times;</span>
          <h2 id="modal-title">ABOUT</h2>
        </div>
        <div class="modal-body">
          <div id = "about-body">
            <table id="about-table">
              <tr>
                <td>
                  <div id = "p1" class="team">
                    <img
                      class="avatar"
                      src="../../assets/images/Chỉnh-cut.png"
                      alt="Chinh"
                      width="100px"
                      height="100px"
                    />
                    <p class="teamName">Lê Thế Chỉnh</p>
                  </div>
                </td>
                <td>
                  <div id = "p2" class="team">
                    <img
                      class="avatar"
                      src="../../assets/images/Hưng-cut.png"
                      alt="hung"
                      width="100px"
                      height="100px"
                    />
                    <p class="teamName">Vũ Việt Hưng</p>
                  </div>
                </td>
                <td>
                  <div id = "p3" class="name">
                    <img
                      class="avatar"
                      src="../../assets/images/Giáp-cut.png"
                      alt="Giap"
                      width="100px"
                      height="100px"
                    />
                    <p class="teamName">Hoàng Minh Giáp</p>
                  </div>
                </td>
                <td>
                  <div id = "p4" class="name">
                    <img
                      class="avatar"
                      src="../../assets/images/Nam-cut.png"
                      alt="Nam"
                      width="100px"
                      height="100px"
                    />
                    <p class="teamName">Đinh Phương Nam</p>
                  </div>
                </td>
                <td></td>
              </tr>
              <tr></tr>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <h3>Design by ..... team</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
    $state = include ('config/state.php');
    $room_state = $_SESSION['room_state'];
    $key =  array_search ($_SESSION['room_state'],  $state );

    if (!empty($key) && $key != 1 ) {
      echo '<div id = "errorPopup" class = "pop-up">
      <div class = "pop-up-content">
        <div class = "pop-up-header">
          <h2 id="pop-up-title">ERROR</h2>
        </div>
        <div class = "pop-up-body">
          <p id = "error-message">'. $key. '</p>
          <div id = "button"><button type = "button" class = "pop-up-button" onclick = "closePopUpClick()"> Okay! </button></div>
        </div> 
      </div>
    </div>';
    }
    unset($_SESSION['room_state']);
    
    ?>