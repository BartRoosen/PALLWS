<?php
//src/Layers/Business/SomeSVC_template.php

namespace Layers\Business;

use Layers\Data\SomeDAO;

class BlindSVC{
	public function getAll(){
		return BlindDAO::getAll();
	}
	
	public function getBlindsByGameId($gameId){
		return BlindDAO::getBlindsByGameId($gameId);
	}
}


















