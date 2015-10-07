<?php
define("SECURITY", "TRUE"); //We need this, to check if the single files are included or directly called.
if(!file_exists('config.php')){
	require_once("install/install.php");
}else{
	require_once("config.php"); //Now we include the Configuration File.
	require_once("includes/functions/autoloader.php"); //We includes the Autoloader for the functions/classes.

	if(IS_INSTALLED == "FALSE"){
		require_once("install/install.php");
	}elseif(IS_INSTALLED == "TRUE"){
		$setbasics = new basic;
		$setbasics->developer_mode(); //Set the Error Reporting with Config settings

		//was wenn affen gerne einen apfel essen? 

		//Test login mask:
		$loginmask = new loginsystem;
		$loginmask->short_login();
	}else{
		echo'Error: Setting for IS_INSTALLED in Config File isn\'t correct: '.IS_INSTALLED;
	}
}