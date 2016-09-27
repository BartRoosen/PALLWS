<?php
//src/Layers/Entities.Blind.php

namespace Layers\Entities;

class Blind{
	private static $idMap = array();
	private $ID;
	private $gameId;
	private $small;
	private $big;
	private $ante;
	private $duration;
	private $pause;
	
	private function __construct($ID, $gameId, $small, $big, $ante, $duration, $pause){
		$this->ID = $ID;
		$this->gameId = $gameId;
		$this->small = $small;
		$this->big = $big;
		$this->ante = $ante;
		$this->duration = $duration;
		$this->pause = $pause;
	}
	
	public function create($ID, $gameId, $small, $big, $ante, $duration, $pause){
		if(!isset(self::$idMap[$ID])){
			self::$idMap[$ID] = new Blind($ID, $gameId, $small, $big, $ante, $duration, $pause);
		}
		return self::$idMap[$ID];
	}
	
	//getters
	
	public function getId(){
		return $this->ID;
	}
	public function getGameId(){
		return $this->gameId;
	}
	public function getSmall(){
		return $this->small;
	}
	public function getBig(){
		return $this->big;
	}
	public function getAnte(){
		return $this->ante;
	}
	public function getDuration(){
		return $this->duration;
	}
	public function getPause(){
		return $this->pause;
	}
	
	//setters
	
	public function setGameId($gameId){
		$this->gameId = $gameId;
	}
	public function setSmall($small){
		$this->small = $small;
	}
	public function setBig($big){
		$this->big = $big;
	}
	public function setAnte($ante){
		$this->ante = $ante;
	}
	public function setDuration($duration){
		$this->duration = $duration;
	}
	public function setPause($pause){
		$this->pause = $pause;
	}
}




























