<?php
define("SECURITY", "TRUE");
require_once("config.php"); //Now we include the Configuration File.
require_once("includes/functions/autoloader.php"); //We includes the Autoloader for the functions/classes.
$registform = new loginsystem;
$registform->regist_form();