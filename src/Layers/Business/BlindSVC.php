<?php
//src/Layers/Business/BlindSVC.php

namespace Layers\Business;

use Layers\Data\BlindDAO;

class BlindSVC{
	public function getAll(){
		return BlindDAO::getAll();
	}
	
	public function getBlindsByGameId($gameId){
		return BlindDAO::getBlindsByGameId($gameId);
	}
	public function addLevel($gameId, $small, $big, $ante, $duration, $pause){
		BlindDAO::addLevel($gameId, $small, $big, $ante, $duration, $pause);
	}
}


















