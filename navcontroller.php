<?php
require_once("bootstrap.php");

use Layers\Business\SessionHandler;

$sh = new SessionHandler();

$sh->start();

if(isset($_GET["page"])){
	$sh->setValue($arr = array(
			'page' => $_GET['page'],
		));
	header('location: ./');
	exit(0);
}