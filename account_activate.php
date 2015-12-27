<?php
define("SECURITY", "TRUE");
require_once("config.php"); //Now we include the Configuration File.
require_once("includes/functions/autoloader.php"); //We includes the Autoloader for the functions/classes.
$key = $_GET['key'];
$activate = new basicmysql;
$activatekey = $activate->activate($key);
if($activatekey == "us"){
  print("Sorry, Activation key not valid!");
}else if($activatekey == "s"){
  print("Account Activated!");
}else{
  print("Error.");
}