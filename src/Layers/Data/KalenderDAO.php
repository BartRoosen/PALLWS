<?php

namespace Layers\Data;

use PDO;

class KalenderDAO{
    
	public function getAll($year)
	{
		$sql = "select 
					(select DAYNAME(datum)) as day,
					datum,
				    (select TIME_FORMAT(tijd, '%H:%i')) as time,
				    (select event_name from pallium_be.events where pallium_be.events.id = event_id) as event,
				    comment,
				    location
				from pallium_be.kalender
				where YEAR(datum) = :year
				order by datum DESC, tijd DESC";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(':year' => $year));
		$resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$dbh = NULL;
		return $resultSet;
	}
}