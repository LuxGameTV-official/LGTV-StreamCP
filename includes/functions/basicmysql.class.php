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
		$pdo = new PDO($pdo_server, $pdo_user, $pdo_password, $pdo_options);
		if(MYSQL_DEVELOPER_MODE == ""){
			//PDO Debug here ^^
		}
		return($pdo);
	}
	function check_login_data($user, $passwd){
		//echo password_hash("test", PASSWORD_DEFAULT)."\n";
		$data_check = new basicmysql;
		$pdo = $data_check->connect_mysql();
		$pdo_query = "SELECT ID, username, pw_hash FROM users WHERE username = ?";
		$stmt = $pdo->prepare($pdo_query);
		$stmt->execute(array($user));
		$row = $stmt->fetch();
		if(password_verify($passwd, $row['pw_hash'])){
			$_SESSION["username"] = $user;
			header('Location: #');
		}else{
			header("Location: ?login_error=\"TRUE\"");
		}
	function create_mysql_structure(){
	}
	}
	function check_username($username){
		$check_username = new basicmysql;
		$pdo = $check_username->connect_mysql();
		$pdo_query = "SELECT ID, username FROM users WHERE username = ?";
		$stmt = $pdo->prepare($pdo_query);
		$stmt->execute(array($username));
		$rowCount = $stmt->rowCount();
		if($rowCount != 0){
			//Username avaiable = a
			//Username unavaiable = ua
			return("ua");
		}else{
			return("a");
		}
	}function createAccount($username, $email, $pwhash){
		$createAccount = new basicmysql;
		$pdo = $createAccount->connect_mysql();
		$pdo_query = "INSERT INTO users (username, email, pw_hash, activated) VALUES (?, ?, ?, ?)";
		$stmt = $pdo->prepare($pdo_query);
		$stmt->execute(array($username, $email, $pwhash, "0"));
	}
}