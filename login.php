<?php

require_once("bootstrap.php");

use Layers\Business\UsersSVC;
use Layers\Business\SessionHandler;

SessionHandler::start();

if(isset($_GET['action']) && $_GET['action'] == 'logoff'){
	SessionHandler::stop();
}

if(isset($_POST['submit']) && $_POST['submit'] == 1){
	$hash = sha1($_POST['name'] . $_POST['pass']);
	$user = UsersSVC::getUser($hash);
	$page = 'lhome';
	if(isset($_GET['mobilelogon']) && $_GET['mobilelogon'] != null){
		$page = 'lfullkal';
	}
	if($user){
		if($user == 'member'){
			SessionHandler::setValue(array(
					'login' => true,
					'user' => 'member',
					'page' => $page,
					'year' => date('Y'),
					'month' => date('m'),
				));
		} elseif ($user == 'admin'){
			SessionHandler::setValue(array(
					'login' => true,
					'user' => 'admin',
					'page' => $page,
					'year' => date('Y'),
					'month' => date('m'),
				));
		}
	} else {
		SessionHandler::setValue(array(
				'login' => false,
			));
	}
}
header('location: ./');