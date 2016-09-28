<?php
//bootstrap.php

use Doctrine\Common\ClassLoader;
require_once("Doctrine/Common/ClassLoader.php");

$classLoader = new ClassLoader("Layers", "src");
$classLoader->register();



/*
DO NOT remove this file as it is there to use 'Doctrine'!!!
*/