<?php
//src/Layers/Entities.Game.php

namespace Layers\Entities;

class Game{
    private static $idMap = array();
	private $ID;
	private $name;
	private $datum;
	
	private function __construct($ID, $name, $datum){
		$this->ID = $ID;
		$this->name = $name;
		$this->datum = $datum;
	}
	
	public function create($ID, $name, $datum){
		if(!isset(self::$idMap[$ID])){
			self::$idMap[$ID] = new Game($ID, $name, $datum);
		}
		return self::$idMap[$ID];
	}
	
	//getters
	
	public function getId(){
		return $this->ID;
	}
	public function getName(){
		return $this->name;
	}
	public function getDatum(){
		return $this->datum;
	}
	
	//setters
	
	public function setName($name){
		$this->name = $name;
	}
	public function setDatum($datum){
		$this->datum = $datum;
	}
}