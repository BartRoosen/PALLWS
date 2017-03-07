<?php
/*
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
*/
require_once("bootstrap.php");

use Layers\Business\SessionHandler;
use Layers\Business\KalenderSVC;

SessionHandler::start();

if(isset($_SESSION['login']) && $_SESSION['login'] == 'admin'){
	if(isset($_GET['action']) && $_GET['action'] == 'add'){
		if(isset($_POST['submit'])){
			KalenderSVC::add($_POST);
		}
		SessionHandler::setValue(array('page' => 'lkal',));
	} elseif (isset($_GET['action']) && $_GET['action'] == 'edit'){
		if(isset($_GET['id']) && $_GET['id'] != null){
			SessionHandler::setValue(array(
					'page' => 'leventedit',
					'edit' => $_GET['id'],
				));
		}
	} elseif (isset($_GET['action']) && $_GET['action'] == 'delete'){
		if(isset($_GET['id']) && $_GET['id'] != null){
			KalenderSVC::delete($_GET['id']);
		} 
		SessionHandler::setValue(array('page' => 'lkal',));
	} elseif (isset($_GET['action']) && $_GET['action'] == 'update'){
		if(isset($_POST['submit'])){
			KalenderSVC::update($_POST);
		}
		SessionHandler::setValue(array('page' => 'lkal',));
		unset($_SESSION['edit']);
	}
} else {
	SessionHandler::stop();
}
header('location: ./');
