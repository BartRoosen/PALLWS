<?php
require_once("bootstrap.php");

use Layers\Business\SessionHandler;

$sh = new SessionHandler();

$sh->start();

if(isset($_SESSION['login']) && $_SESSION['login'] == 'admin'){
	# file deleten
	if(isset($_GET['file']) && $_GET['file'] != null) {
		unlink($_GET['file']);
		$arr_file = explode("/", $_GET['file']);
		$sh->setValue(array(
				'upload-message' => "Het bestand " . $arr_file[1] . " is verwijderd...",
			));
	} else {
		# file uploaden
		if(isset($_SESSION['path']) && $_SESSION['path'] != null) {
			$target_dir = $_SESSION['path']. "/";
			$sh->unsetValue(array('path'));
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

			// Check if file already exists
			if (file_exists($target_file)) {
				$error_message = "Er bestaat reeds een bestand met dezefde bestandsnaam...";
			    $uploadOk = 0;
			}
			// Check file size
			if ($_FILES["fileToUpload"]["size"] > 500000) {
				$error_message = "Het bestand dat u wil uploaden is te groot...";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "xls"
			&& $imageFileType != "xlsx" && $imageFileType != "pdf" ) {
				$error_message = "Enkel bestanden met extentie doc, docx, xls, xlsx en pdf zijn toegelaten...";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				$sh->setValue(array(
						'upload-error' => "Het bestand werd niet geüpload. " . $error_message,
					));
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			    	$sh->setValue(array(
						'upload-message' => "Het bestand ". basename( $_FILES["fileToUpload"]["name"]). " is toegevoegd.",
					));
			    } else {
			    	$sh->setValue(array(
						'upload-error' => "Er is iets misgelopen bij het uploaden van het bestand...",
					));
			    }
			}
		}
	}
	$sh->setValue(array(
			'page' => 'ldocs',
		));
} else {
	SessionHandler::stop();
}
header('location: ./');
