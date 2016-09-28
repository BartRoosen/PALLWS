<?php
//src/Layers/Data/SomeDAO_template.php

namespace Layers\Data;

use Layers\Entities\Blind;
use PDO;

class SomeDAO{
	public function getAll(){
		$sql = "select * from sometable";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$resultSet = $dbh->query($sql);
		$lijst = array();
		foreach($resultSet as $rij){
			$lijst[] = Blind::create($rij['something'], $rij['somethinelse']);
		}
		$dbh = NULL;
		return $lijst;
	}
	
	public function getExampleById($exampleId){
		$sql = "select * from sometable where exampleId = :exampleId order by ID";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(":gameId" => $exampleId));
		$resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$lijst = array();
		foreach($resultSet as $rij){
			$lijst[] = Blind::create($rij['ID']);
		}
		$dbh = NULL;
		return $lijst;
	}
}