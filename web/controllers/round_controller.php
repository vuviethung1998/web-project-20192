<?php

require_once('controllers/base_controller.php');
require_once('models/round.php');

class RoundController extends BaseController {

    function __construct() {
        $this->folder = 'round';
    }

    public function render_create_round() {
        $this->render('create_round');
    }

    public function create_round() {       
        $room_id = $_POST['room_id'];
        $round_num = 1;
        $round_id = rand();
        $punishments_list_query = $db->query("SELECT punishment_id FROM punishment as p WHERE p.room_id = {$room_id}");
        $punishments_list = $punishments_list_query->fetchAll();
        if (count($punishments_list) > 0) {
            $punishments_id = array_rand(array($punishments_list),1);
            print $punishments_id;
        }
        $player_list_query = $db->query("SELECT player_id FROM player as pl WHERE pl.room_id = {$room_id}");
        $players_list = $player_list_query->fetchAll();
        if (count($player_list) > 0) {
            $player_id = array_rand(array($players_list),1);
        }  
        
        $round_start =  Round::createRound($round_id, $round_num, $punishment_id, $player_id, $room_id);
        if ($round_start == 1) {
            $this->render('loading');
            sleep(3);
            $this->render('result');   
            $round_num++;         
        }
    }
    public function end_round() {
        $room_id = $_POST['room_id'];
        $player_role_query = $db->query("SELECT player_role, player_id FROM player as pl WHERE pl.room_id = {$room_id}");
        $players_role_list = $player_role_query->fetchAll();       
// if role == host, render main_room_host
// else render main_room
    }
}
