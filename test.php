<?php

require_once("bootstrap.php");  //do not forget this line as it wil make sure you can use the namespaces

use Layers\Business\UsersSVC;       
use Layers\Business\Filegetter;
use Layers\Business\KalenderSVC;
use Layers\Business\EventsSVC;

$str = "2016-12-06";

$date = strtotime($str);

$now = date('d-m-Y');
$now = strtotime($now);
echo $now . "<br>";

if($now <= $date)
{
	echo date('d-m-Y', $date);
}