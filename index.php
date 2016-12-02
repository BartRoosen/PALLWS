<?php
require_once("bootstrap.php");  //do not forget this line as it wil make sure you can use the namespaces

use Layers\Business\SessionHandler;
use Layers\Business\Filegetter;
use Layers\Content\Text;

SessionHandler::start();

if(!isset($_SESSION["login"]) /*|| !$_SESSION["login"]*/){
	
	//Pages where no login is required come here
	
	if(isset($_SESSION["page"])){
		switch ($_SESSION["page"]) {
			case 'home':
				$content = Text::home();
				break;
			case 'pallzorg':
				$content = Text::pallzorg();
				break;
			case 'vrijwilligers':
				$content = Text::vrijwilligers();
				break;
			case 'vrijwilligerworden':
				$content = Text::vrijwilligerworden();
				break;
			case 'getuigenissen':
				$content = Text::getuigenissen();
				$files = Filegetter::getAll('getuigenissen');
				break;
			case 'links':
				$content = Text::links();
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
} elseif (isset($_SESSION['login']) && !$_SESSION['login']) {
	$content = Text::loginfail();
	SessionHandler::stop();
	SessionHandler::setValue(array('page' => 'loginfail'));
	include("src/Layers/Presentation/" . $_SESSION["page"] . ".php");
} elseif (isset($_SESSION['login']) && $_SESSION['login']) {
	//pages that do require login come here

	if(isset($_SESSION["page"])){
		switch ($_SESSION["page"]) {
			case 'lformulieren':
				$forms = Filegetter::getAll('formulieren');
				break;
			case 'lstatuten':
				$forms = Filegetter::getAll('statuten');
				break;
			case 'lreglement':
				$forms = Filegetter::getAll('reglement');
				break;
			case 'ldocumenten':
				$forms = Filegetter::getAll('documenten');
				break;
			default:
				# code...
				break;
		}
		include("src/Layers/Presentation/" . $_SESSION["page"] . ".php");
	}
	exit(0);
}



