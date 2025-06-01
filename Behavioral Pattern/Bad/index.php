<?php

include_once "BlockGame.php";
include_once "BlockGame2.php";

$blockGame = new BlockGame();
$blockGame->start();

$blockGame2 = new BlockGame2();
$blockGame2->start();
