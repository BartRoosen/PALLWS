<?php
//src/Layers/Business/GameSVC.php

namespace Layers\Business;

use Layers\Data\GameDAO;

class GameSVC{
	public function getAll(){
		return GameDAO::getAll();
	}
	
	public function addGame($name, $datum){
		GameDAO::addGame($name, $datum);
	}
	public function getGameById($ID){
		return GameDAO::getGameById($ID);
	}
}















