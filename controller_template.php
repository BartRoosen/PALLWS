<?php
//type the name of the file here...
/*
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
*/
require_once("bootstrap.php");  //do not forget this line as it wil make sure you can use the namespaces

use Layers\Business\...;        
use Layers\Entities\...;        
use Layers\Exceptions\...;      
use Layers\Data\...;            

//replace the '...' with the file you want to 'include'

//code goes here