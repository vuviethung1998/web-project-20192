<?php
require_once('../connection.php');

$db = DB::getInstance();

$room_id = $_REQUEST['room_id'];

$find_players_in_room_query = "SELECT player_name FROM player WHERE room_id='$room_id'";
$players_in_room = $db->query($find_players_in_room_query);
echo json_encode($players_in_room->fetchAll(PDO::FETCH_COLUMN, 0));

?>