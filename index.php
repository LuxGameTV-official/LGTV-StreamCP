<?php
define("SECURITY", "TRUE"); //We need this, to check if the single files are included or directly called.
require_once("config.php"); //Now we include the Configuration File.
require_once("includes/functions/autoloader.php"); //We includes the Autoloader for the functions/classes.

$setbasics = new basic;
$setbasics->developer_mode(); //Set the Error Reporting with Config settings

$basicmysql = new basicmysql;
$basicmysql->connect_mysql(); //Connect to the MySQL Server with PDO 

//was wenn affen gerne einen apfel essen? 

//Test login mask:
$loginmask = new loginsystem;
$loginmask->short_login();