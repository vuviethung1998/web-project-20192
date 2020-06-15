<div class="bg-create-room">
    <form action="index.php?controller=pages&action=home" method="POST">
        <button class="title-create-room">Punishhhh</button>
      </form>
    <form action="index.php?controller=rooms&action=create_room" method="POST">
        <div class="text-create-room" >
            <p style="font-size: 8vw">create room</p>
        </div>
        <table style="margin:auto">
            <tr>
                <td style="text-align: right; padding-bottom: 15px; padding-right: 10px" class="text">
                    <p>password </p>
                </td>
                <td>
                    <input type="text" name="room_password" />
                </td>
            </tr>
            <tr>
                <td  style="text-align: center; padding-bottom: 15px; padding-right: 10px" class="text">
                    Number of players
                </td>
                <td>
                    <input type="text" name="player_num" />
                </td>
            </tr>
        </table>
        <button class="bbutton" type="submit" name="submit_create" >create</button>
    </form>
    
    <button class="aboutbutton">about</button>
    
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

</div>
<?php
    $state = include ('config/state.php');
    $room_state = $_SESSION['room_state'];
    $key =  array_search ($_SESSION['room_state'],  $state );

    if (!empty($key) ) {
        echo "<script type=\"text/javascript\">console.log('Debug Objects: " . $key . "' );</script>";
        echo "<script>alert('$key');</script>"; 
    }
    unset($_SESSION['room_state']);
?>
