<?php
require_once('../connection.php');

$db = DB::getInstance();

$room_id = $_REQUEST['room_id'];

$is_room_started_query = "SELECT is_closed FROM room WHERE room_id='$room_id'";
$is_room_started = $db->query($is_room_started_query);
echo json_encode($is_room_started->fetch());

?>