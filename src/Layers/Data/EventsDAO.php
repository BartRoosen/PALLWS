<?php

namespace Layers\Data;

use PDO;

class EventsDAO{
    
	public function getActiveEvents()
	{
		$sql = "select * from pallium_be.events where active = 1 order by event_name";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		$resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$dbh = NULL;
		return $resultSet;
	}
}