<?php
//src/Layers/Business/SomeSVC_template.php

namespace Layers\Business;

use Layers\Data\UsersDAO;

class UsersSVC{
	
	public function getUser($hash)
	{
		$user = UsersDAO::getUser($hash);
		if($user == null){
			return false;
		} else {
			if($user['admin'] == 0){
				return 'member';
			} elseif ($user['admin'] == 1){
				return 'admin';
			}
		}
	}
}