<?php
class loginsystem{
	function short_login(){
	if(array_key_exists('short_loginmask_register', $_POST)){
		header("Location: regist.php");
	}else{
		if(array_key_exists('short_loginmask_submit', $_POST)){
			if(empty($_POST['short_loginmask_user']) OR empty($_POST['short_loginmask_password'])){
				echo"<p class='short_loginmask_error'>Please insert username and passwort!</p>";
			}else{
				//Check if username + password is correct.
				$checklogin = new basicmysql;
				$user = $_POST['short_loginmask_user'];
				$passwd = $_POST['short_loginmask_password'];
				$checklogin->check_login_data($user, $passwd);
			}
		}else{
		if(isset($_GET['login_error'])){
			print'<p class="loginerror">Login Informations aren\'t correct!</p>';
		}
		echo'<form method="POST" action="'.$_SERVER["SCRIPT_NAME"].'">';
		echo'<p class="short_loginmask_text"><input class="short_loginmask_field" name="short_loginmask_user" placeholder="Username" type="text"></p>';
		echo'<p class="short_loginmask_text"><input class="short_loginmask_field" name="short_loginmask_password" placeholder="Password" type="password"></p>';
		echo'<p class="short_loginmask_text"><input class="short_loginmask_submit" name="short_loginmask_submit" value="Submit" type="submit"></p>';
		echo'</form>';
		print'<form method="POST" action="'.$_SERVER["SCRIPT_NAME"].'">';
		print'<input class="short_loginmask_register" name="short_loginmask_register" value="Register" type="submit">';
		print'</form>';
		}
	}
	}
	function logout_button(){
		echo'<form method="POST" action="logout.php">';
		echo'<input type="submit" name="logout_button_submit" value="Logout!">';
		echo'</form>';
	}
	function regist_form(){
		if(isset($_POST['registform_submit'])){
			//Its Shorter ;)
			$regist_user = $_POST['registform_user'];
			$regist_email = $_POST['registform_email'];
			$regist_password = $_POST['registform_password'];
			$regist_password_repeat = $_POST['registform_password_repeat'];
			
			//Check if all Fields was filled in
			if(empty($_POST['registform_user']) OR empty($_POST['registform_email']) OR empty($_POST['registform_password']) OR empty($_POST['registform_password_repeat'])){
				header("Location: ?insertempty");
			}else{
				if(!preg_match('/[0-9a-zA-Z-_.]/', $regist_user)){
					header("Location: ?usernameincorrect");
				}else{
				//Check if Email is valid
				if (!filter_var($regist_email, FILTER_VALIDATE_EMAIL)) {
					header("Location: ?emailincorrect");
				}else{
					//Check if Passwort and Passwort Repeat matchs
					if($regist_password != $regist_password_repeat){
						header("Location: ?pwunmatch");
					}else{
						//Check if password contains numbers and is lenghter then 7}
						if(strlen($regist_password) < 8 OR !preg_match('/[0-9]/', $regist_password)){
							header("Location: ?pwtoobad");
						}else{
							if(!preg_match('/[0-9a-zA-Z-_.]/', $regist_password)){
								header("Location: ?passwordillegal");
							}else{
							$accountcreate = new basicmysql;
							if($accountcreate->check_username($regist_user) == "ua"){
								header("Location: ?usernameua");
							}else{
								if($accountcreate->check_mail($regist_email) == "ua"){
									header("Location: ?mailua");
								}else{
								$regist_pwhash = password_hash($regist_password, PASSWORD_DEFAULT);
								$accountcreate->createAccount($regist_user, $regist_email, $regist_pwhash);
								print("Account sucessfully created.");
							}
						}
						}
						}
					}
				}
			}
		}
		}else{
		if(isset($_GET['insertempty'])){
			print("Error: Please fill in ALL fields!");
		}else if(isset($_GET['usernameincorrect'])){
			print("Error: Username contains illegal chars.");
		}else if(isset($_GET['emailincorrect'])){
			print("Error: E-Mail Adress is not valid.");
		}else if(isset($_GET['pwunmatch'])){
			print("Error: Password and Password-Repeat are not equal.");
		}else if(isset($_GET['pwtoobad'])){
			print("Error: Password not strong enough. Passwords must contain at least 1 number and must be longer then 7 chars.");
		}else if(isset($_GET['passwordillegal'])){
			print("Error: You Password contains illegal chars.");
		}else if(isset($_GET['usernameua'])){
			print("Error: You username is already used.");
		}else if(isset($_GET['mailua'])){
			print("Error: You e-mail is already used.");
		}
		print'<form method="POST" action="'.$_SERVER["SCRIPT_NAME"].'">';
		print'<p class="registform_text"><input class="registform_field" name="registform_user" placeholder="Username" type="text"></p>';
		print'<p class="registform_text"><input class="registform_field" name="registform_email" placeholder="E-Mail Adress" type="text"></p>';
		print'<p class="registform_text"><input class="registform_field" name="registform_password" placeholder="Password" type="password"></p>';
		print'<p class="registform_text"><input class="registform_field" name="registform_password_repeat" placeholder="Repeat Password" type="password"></p>';
		print'<input class="registform_submit" name="registform_submit" value="Regist!" type="submit"></p>';
		print'</form>';
		}
	}
}