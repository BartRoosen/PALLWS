<?php
//src/Layers/Entities/Entities_template.php

namespace Layers\Entities;

class MyEntity{
	private static $idMap = array();
	private $example
	
	private function __construct($example){
		$this->example = $example;
		
	}
	
	public function create($example){
		if(!isset(self::$idMap[$ID])){
			self::$idMap[$ID] = new Blind($example);
		}
		return self::$idMap[$ID];
	}
	
	//getters
	
	public function getExample(){
		return $this->example;
	}
		
	//setters
	
	public function setExample($example){
		$this->example = $example;
	}
}




























