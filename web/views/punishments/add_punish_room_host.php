<div class="bg-add-punish">
  <form action="index.php" method="POST">
    <button class="title-room">Punishhhh</button>
  </form>
  <div class="passroom">
    id: <?php print($_SESSION['room_id']) ?>
  </div>
  <div>
    <form action="index.php?controller=punishments&action=create_punishment_host" method="POST">
      <table style="margin: auto; padding-top: 30px">
        <tr>
          <td style="text-align: right; padding-bottom: 15px; padding-right: 10px;" class="text-room">
            host
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
      <button class="bbutton-room">start</button>
    </form>
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
    <?php
    $state = include ('config/state.php');
    $room_state = $_SESSION['room_state'];
    $key =  array_search ($_SESSION['room_state'],  $state );

    if (!empty($key) ) {
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