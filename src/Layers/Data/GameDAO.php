<?php
//src/Layers/Data/GameDAO.php

namespace Layers\Data;

use Layers\Entities\Game;
use PDO;

class GameDAO{
	public function getAll(){
		$sql = "select * from games";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$resultSet = $dbh->query($sql);
		$lijst = array();
		foreach($resultSet as $l){
			//$lijst[] = $l;
			$game = Game::create($l['ID'], $l['name'], $l['datum']);
			$lijst[] = $game;
		}
		return $lijst;
	}
	
	public function addGame($name, $datum){
		$sql = "insert into games (name, datum) values (:name, :datum)";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(":name" => $name, ":datum" => $datum));
		$dbh = NULL;
	}
	
	public function getGameById($ID){
		$sql = "select * from games where ID = :ID";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(":ID" => $ID));
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return Game::create($result["ID"], $result["name"], $result["datum"]);
	}
}