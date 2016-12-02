<?php

require_once("bootstrap.php");  //do not forget this line as it wil make sure you can use the namespaces

use Layers\Business\UsersSVC;       
use Layers\Business\Filegetter;

print_r(Filegetter::getAll('formulieren'));
