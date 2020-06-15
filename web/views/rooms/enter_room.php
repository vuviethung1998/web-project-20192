<div class="bg-enter-room">
    <div>
        <form action="index.php?controller=rooms&action=enter_room" method="POST">
            <div class="text" >
                <p style="font-size: 8vw">enter room</p>
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
                    <td style = "text-align: right;padding-bottom: 10px; padding-left: 200px"><input type = "checkbox" id = "checkbox-as-host" value = "yes"name = "checkbox" style = "width: 50px; height: 50px"></td>
                    <td style="text-align: left; padding-bottom: 15px; padding-left: 30px" class="text-checkbox"> <p>Join room as Host<p></td>
                </tr>

            </table>
            <button class="abutton" type="submit">enter</button>
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
    </div>
</div>