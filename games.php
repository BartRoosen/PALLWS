<?php
//games.php
//this is the controller for the games and blinds lists...

require_once("bootstrap.php");
use Layers\Business\GameSVC;
use Layers\Business\BlindSVC;


if(isset($_GET["action"]) && $_GET["action"] == "showBlinds"){
	if(isset($_GET["game"])){
		$game = GameSVC::getGameById($_GET["game"]);
		$aBlinds = BlindSVC::getBlindsByGameId($_GET["game"]);
		include("src/Layers/Presentation/BlindsList.php");
		exit(0);
	}
	else{
		header("location: games.php");
	}
}
elseif(isset($_GET["action"]) && $_GET["action"] == "addGame"){
	if(isset($_POST["name"]) && isset($_POST["date"])){
		GameSVC::addGame($_POST["name"], $_POST["date"]);
	}
	header("location: games.php");
}
elseif(isset($_GET["action"]) && $_GET["action"] == "addLevel"){
	if(isset($_GET["type"]) && $_GET["type"] == "pause"){
		BlindSVC::addLevel($_GET["game"], 0, 0, 0, $_POST["duration"], 1);
	}
	else{
		BlindSVC::addLevel($_GET["game"], $_POST["small"], $_POST["big"], $_POST["ante"], $_POST["duration"], 0);
	}
	header("location: games.php?action=showBlinds&game=" . $_GET["game"]);
}
elseif(isset($_GET["action"]) && $_GET["action"] == "start"){
	$game = GameSVC::getGameById($_GET["game"]);
	$json_blinds = BlindSVC::getJsonString($_GET["game"]);
	include("src/Layers/Presentation/Clock.php");
	exit(0);
}
else{
	$gamesLijst = GameSVC::getAll();
	include("src/Layers/Presentation/GamesList.php");
}


















