<?php
/*
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
*/
require_once("bootstrap.php");  //do not forget this line as it wil make sure you can use the namespaces

use Layers\Business\SessionHandler;

SessionHandler::start();

if(isset($_SESSION['login']) && $_SESSION['login']){
	if(isset($_GET['year']) && $_GET['year'] != null){
		SessionHandler::setValue(array(
				'year' => $_GET['year'],
			));
	}
}
header('location: ./');