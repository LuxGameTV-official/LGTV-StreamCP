<?php
class loginsystem{
	function short_login(){
		//print_r($_POST);
		if(array_key_exists('short_loginmask_submit', $_POST)){
			if(empty($_POST['short_loginmask_user']) OR empty($_POST['short_loginmask_password'])){
				echo"<p class='short_loginmask_error'>Please insert username and passwort!</p>";
			}else{
				
			}
		}else{
		echo'<form method="POST" action="'.$_SERVER["SCRIPT_NAME"].'">';
		echo'<p class="short_loginmask_text"><input class="short_loginmask_field" name="short_loginmask_user" placeholder="Username or E-Mail" type="text"></p>';
		echo'<p class="short_loginmask_text"><input class="short_loginmask_field" name="short_loginmask_password" placeholder="Password" type="password"></p>';
		echo'<p class="short_loginmask_text"><input class="short_loginmask_submit" name="short_loginmask_submit" text="Submit" type="submit"></p>';
		echo'</form>';
		}
	}
}