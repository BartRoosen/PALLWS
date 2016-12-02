<?php

namespace Layers\Data;

use PDO;

class UsersDAO{
    
	public function getUser($hash)
	{
		$sql = "select * from users where hash = :hash and active = 1";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(":hash" => $hash));
		$resultSet = $stmt->fetch(PDO::FETCH_ASSOC);
		$dbh = NULL;
		return $resultSet;
	}
}