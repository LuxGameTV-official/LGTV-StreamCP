<?php
class loginsystem{
	function short_login(){
		echo'<form action="'.$_SERVER["SCRIPT_NAME"].'">';
		echo'<p class="short_loginmask_text"><input class="short_loginmask_field" placeholder="Username or E-Mail" type="text"></p>';
		echo'<p class="short_loginmask_text"><input class="short_loginmask_field" placeholder="Password" type="password"></p>';
		echo'<p class="short_loginmask_text"><input class="short_loginmask_submit" text="Submit" type="submit"></p>';
		echo'</form>';
	}
}