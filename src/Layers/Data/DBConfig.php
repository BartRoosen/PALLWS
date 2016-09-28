<?php
//data/DBConfig.php

namespace Layers\Data;

class DBConfig{
    public static $DB_CONNECTIONSTRING = "mysql:host=localhost; dbname=mydatabase; charset=utf8";
    public static $DB_USER = "****";
    public static $DB_PASSWORD = "****";
}


/*

=> the connectionstring depends on how your db has been configured

=> Add this file to the .gitignore to prevent publicly displaying your db login info

*/