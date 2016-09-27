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
	
	public function getJsonString($gameId){
		$oaBlinds = self::getBlindsByGameId($gameId);
		$aLevels = array();
		foreach($oaBlinds as $level){
			$aLevels[] = ["small" => $level->getSmall(), "big" => $level->getBig(), "ante" => $level->getAnte(), "duration" => $level->getDuration(), "pause" => $level->getPause()];
		}
		$jsonString = json_encode($aLevels);
		return $jsonString;
	}
}


















