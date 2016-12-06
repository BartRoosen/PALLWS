<?php

namespace Layers\Data;

use PDO;

class KalenderDAO{
    
	public function getAll($year)
	{
		$sql = "select 
					id,
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

	public function add($arr)
	{
		$sql = "insert into pallium_be.kalender (datum, tijd, event_id, comment, location) values (:datum, :tijd, :event_id, :comment, :location)";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(
				':datum' => $arr['date'],
				':tijd' => $arr['time'],
				':event_id' => $arr['event'],
				':comment' => $arr['comment'],
				':location' => $arr['location'],
			));
		$resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$dbh = NULL;
	}

	public function delete($id)
	{
		$sql = "delete from pallium_be.kalender where id = :id";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(
				':id' => $id,
			));
		$resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$dbh = NULL;
	}

	public function getEventById($id)
	{
		$sql = "select * from pallium_be.kalender where id = :id";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(
				':id' => $id,
			));
		$resultSet = $stmt->fetch(PDO::FETCH_ASSOC);
		$dbh = NULL;
		return $resultSet;
	}

	public function update($arr)
	{
		$sql = "update pallium_be.kalender set datum = :datum, tijd = :tijd, event_id = :event_id, comment = :comment, location = :location where id = :id";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(
				':id' => $arr['id'],
				':datum' => $arr['date'],
				':tijd' => $arr['time'],
				':event_id' => $arr['event'],
				':comment' => $arr['comment'],
				':location' => $arr['location'],
			));
		$resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$dbh = NULL;
	}

	public function getKalender()
	{
		$sql = "select 
					id,
					(select DAYNAME(datum)) as day,
					datum,
				    (select TIME_FORMAT(tijd, '%H:%i')) as time,
				    (select event_name from pallium_be.events where pallium_be.events.id = event_id) as event,
				    comment,
				    location
				from pallium_be.kalender
				where datum >= CURDATE()
				order by datum, tijd";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		$resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$dbh = NULL;
		return $resultSet;
	}

	public function getFullKalender($year)
	{
		$sql = "select 
					id,
					(select DAYNAME(datum)) as day,
					datum,
				    (select TIME_FORMAT(tijd, '%H:%i')) as time,
				    (select event_name from pallium_be.events where pallium_be.events.id = event_id) as event,
				    comment,
				    location
				from pallium_be.kalender
				where YEAR(datum) = :year
				order by datum ASC, tijd ASC";
		$dbh = new PDO(DBConfig::$DB_CONNECTIONSTRING, DBConfig::$DB_USER, DBConfig::$DB_PASSWORD);
		$stmt = $dbh->prepare($sql);
		$stmt->execute(array(':year' => $year));
		$resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$dbh = NULL;
		return $resultSet;
	}
}