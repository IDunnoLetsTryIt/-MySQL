<?php
require_once 'DB.php';
require_once 'DB_functions.php';
 DB::connect('localhost', 'games', 'root','');

class Games {

    public function get(){

    $query=select("
    SELECT *
    FROM `games`
    ");
   return $query;
    }

    
}

$gamesinstance= new Games;
$gamesdata=$gamesinstance->get();

echo json_encode($gamesdata);