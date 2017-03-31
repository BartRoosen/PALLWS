<?php

require_once("bootstrap.php");

use Layers\Business\SessionHandler;

$sh = new SessionHandler();

$sh->start();

if(isset($_GET["page"])){
	$sh->setValue($arr = array(
			'page' => $_GET['page'],
		));
	if(isset($_GET['path']) && $_GET['path'] != null) {
		$sh->setValue($arr = array(
				'path' => $_GET['path'],
			));
	}
	header('location: ./');
	exit(0);
}