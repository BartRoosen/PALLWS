<?php

require_once("bootstrap.php");  //do not forget this line as it wil make sure you can use the namespaces

use Layers\Business\SessionHandler;

SessionHandler::start();

if(isset($_SESSION['login']) && $_SESSION['login']){
	if(isset($_GET['month']) && $_GET['month'] != null){
		SessionHandler::setValue(array(
				'month' => $_GET['month'],
			));
	}
}
header('location: ./');