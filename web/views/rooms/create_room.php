<!--<div class="bg">-->
<form action="index.php?controller=rooms&action=create_room" method="POST">
    <div class="text" >
        <p style="font-size: 8vw">create room</p>
    </div>
    <table style="margin:auto">
        <tr>
            <td style="text-align: right; padding-bottom: 15px; padding-right: 10px" class="text">
                <p>password</p>
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
    <button class="bbutton" type="submit" name="submit_create">create</button>
</form>
<form
    action=""
    method="POST"
>
    <button class="aboutbutton">about</button>
</form>
<form
    action=""
    method="POST"
>
    <button class="rulebutton">rule</button>
</form>