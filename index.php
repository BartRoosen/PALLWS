<?php
require_once("bootstrap.php");  //do not forget this line as it wil make sure you can use the namespaces

use Layers\Business\SessionHandler;
use Layers\Content\Text;

SessionHandler::start();

if(!isset($_SESSION["login"]) || !$_SESSION["login"]){
	
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
				$arr_files = scandir('getuigenissen');
				$files = array();
				foreach ($arr_files as $value) {
					if($value != "." && $value != ".."){
						$arr_parts = explode(".", $value);
						$files[$value] = $arr_parts[0];
					}
				}
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



