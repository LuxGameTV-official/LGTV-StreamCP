<?php
ini_set('php_value output_buffering', '1');
ini_set('session.use_trans_sid', '0');
ini_set('session.use_cookies' , '1' );
ini_set('session.use_only_cookies' , '1');
session_start();
define("SECURITY", "TRUE"); //We need this, to check if the single files are included or directly called.
if(!file_exists('config.php')){
	require_once("install/install.php"); //Display Installer
}else{
	require_once("config.php"); //Now we include the Configuration File.
	require_once("includes/functions/autoloader.php"); //We includes the Autoloader for the functions/classes.

	if(IS_INSTALLED == "FALSE"){
		require_once("install/install.php"); //Display Installer 
	}elseif(IS_INSTALLED == "TRUE"){
		$setbasics = new basic;
		$setbasics->developer_mode(); //Set the Error Reporting with Config settings
		
		if(isset($_SESSION['username'])){
			print'Welcome '.$_SESSION['username'];
			$loginsys = new loginsystem;
			$loginsys->logout_button();
		}else{
		//Test login mask:
		$loginmask = new loginsystem;
		$loginmask->short_login();

		}
	}else{
		echo'Error: Setting for IS_INSTALLED in Config File isn\'t correct: '.IS_INSTALLED;
	}
}