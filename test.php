<?php

require_once("bootstrap.php");
//use Layers\Data\BlindDAO;
use Layers\Data\GameDAO;
use Layers\Business\GameSVC;
use Layers\Business\BlindSVC;

$game = GameDAO::getGameById(2);

print_r($game);