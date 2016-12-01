<?php
require_once("bootstrap.php");  //do not forget this line as it wil make sure you can use the namespaces

use Layers\Business\KostenSVC;
use Layers\Business\VendorSVC;
use Layers\Business\CategorySVC;
use Layers\Business\TagsSVC;
use Layers\Business\KostTagSVC;
use Layers\Business\CreditorsSVC;
use Layers\Business\TransfersSVC;
use Layers\Business\DevisionKeySVC;
use Layers\Business\SessionHandler;

SessionHandler::start();

if(!isset($_SESSION["login"]) || !$_SESSION["login"]){
	
	//Pages where no login is required come here
	
	if(isset($_SESSION["page"])){
		switch ($_SESSION["page"]) {
			case 'home':
				break;
			default:
				# code...
				break;
		}
		include("src/Layers/Presentation/" . $_SESSION["page"] . ".php");
	} else {
		SessionHandler::setValue(array('page' => 'home'));
		header('location: ./');
	}
	exit(0);
} else {
	
	//pages that do require login come here

	if(isset($_SESSION["page"])){
		switch ($_SESSION["page"]) {
			
			default:
				# code...
				break;
		}
		include("src/Layers/Presentation/" . $_SESSION["page"] . ".php");
	}
	exit(0);
}



