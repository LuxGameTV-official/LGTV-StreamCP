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
		print'<form method="POST" action="'.$_SERVER["SCRIPT_NAME"].'">';
		print'<p class="registform_text"><input class="registform_field" name="registform_user" placeholder="Username" type="text"></p>';
		print'<p class="registform_text"><input class="registform_field" name="registform_email" placeholder="E-Mail Adress" type="text"></p>';
		print'<p class="registform_text"><input class="registform_field" name="registform_password" placeholder="Password" type="text"></p>';
		print'<p class="registform_text"><input class="registform_field" name="registform_password_repeat" placeholder="Repeat Password" type="text"></p>';
		print'<input class="registform_submit" name="registform_submit" value="Regist!" type="submit"></p>';
		print'</form>';
	}
}