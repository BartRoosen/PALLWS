<?php
//src/Layers/Data/BlindDAO.php

namespace Layers\Data;

use Layers\Entities\Blind;
use PDO;

class BlindDAO{
	public function getAll(){
		$sql = "select * from blinds";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$resultSet = $dbh->query($sql);
		$lijst = array();
		foreach($resultSet as $rij){
			$lijst[] = Blind::create($rij['ID'], $rij['gameId'], $rij['small'], $rij['big'], $rij['ante'], $rij['duration'], $rij['pause']);
		}
		$dbh = NULL;
		return $lijst;
	}
	
	public function getBlindsByGameId($gameId){
		$sql = "select * from blinds where gameId = :gameId order by ID";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(":gameId" => $gameId));
		$resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$lijst = array();
		foreach($resultSet as $rij){
			$lijst[] = Blind::create($rij['ID'], $rij['gameId'], $rij['small'], $rij['big'], $rij['ante'], $rij['duration'], $rij['pause']);
		}
		$dbh = NULL;
		return $lijst;
	}
	
	public function addLevel($gameId, $small, $big, $ante, $duration, $pause){
		$sql = "insert into blinds (gameId, small, big, ante, duration, pause) values (:gameId, :small, :big, :ante, :duration, :pause)";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(":gameId" => $gameId, ":small" => $small, ":big" => $big, ":ante" => $ante, ":duration" => $duration, ":pause" => $pause));
		$dbh = NULL;
	}
}