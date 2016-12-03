<?php

require_once("bootstrap.php");  //do not forget this line as it wil make sure you can use the namespaces

use Layers\Business\UsersSVC;       
use Layers\Business\Filegetter;
use Layers\Business\KalenderSVC;

print_r(KalenderSVC::getAll(2016));
