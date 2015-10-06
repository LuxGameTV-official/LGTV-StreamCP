<?php
class basicmysql{
	function connect_mysql(){
		$pdo_server = 'mysql:dbname='.DATABASE_NAME.';host='.DATABASE_HOST.'; port='.DATABASE_PORT;;
		$pdo_user     = DATABASE_UNAME;
		$pdo_password = DATABASE_PASSWORD;
		$pdo_options  = array
					(
					  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
					  PDO::MYSQL_ATTR_READ_DEFAULT_FILE => '/etc/my.cnf'
					);
		$pdo      = new PDO($pdo_server, $pdo_user, $pdo_password, $pdo_options);
		if(MYSQL_DEVELOPER_MODE == ""){
			//PDO Debug here ^^
		}
	}
	function check_login_data(){
		$data_check = new basicmysql;
		$data_chek->connect_mysql();
		
	}
}