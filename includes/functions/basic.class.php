<?php
class basic{
	function developer_mode(){
		if(DEVELOPER_MODE == "ON"){
			if (!ini_get('display_errors')) {
    			ini_set('display_errors', '1');
			}
			error_reporting(-1);
			echo"Warning: System is in Developer Mode. All Errors will be displayed. <br>";
		}elseif(DEVELOPER_MODE == "TESTRUN"){
			error_reporting(E_ERROR | E_WARNING | E_PARSE);
		}elseif(DEVELOPER_MODE == "OFF"){
			error_reporting(0);
		}else{
			echo'ERROR: Invalid Setting for Developer Mode: '.DEVELOPER_MODE;
		}
	
	}
}