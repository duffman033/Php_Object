<?php

use App\Models\PlayersCard;
use App\Models\VideoGame;
use App\Tools\Generals;
require_once '../consts/data.php';
require_once '../vendor/autoload.php';

Generals::setupWorkspace();

//$list = [];
//foreach (GAME as $i){
//    $iObj = new VideoGame();
//    $iObj->hydrateObject($i);
//    array_push($list,$iObj);
//}
//dump ($list);
$dbTools = new\App\DatabaseTools();
$dbTools->init();

$play = $dbTools->execSqlQuery('SELECT * FROM players');
$jeu = $dbTools->execSqlQuery('SELECT * FROM game');
$plat = $dbTools->execSqlQuery('SELECT * FROM consoles');
$players = [];
foreach ($play as $row){
    $player = new PlayersCard();
    $player->indentifyPlayer($row['nickname'],$row['age']);
    $player->locateConsole($row['consoles'], $plat);
    $player->fillGames($row['games'], $jeu);
    array_push($players,$player);
}
dump($players);