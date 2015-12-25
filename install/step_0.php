<?php
if(isset($_GET['submit'])){

	if($inserts_correct == "TRUE"){ //If Inserts are correct, redirect to next site
		header("Location: ?step=1");
	}

}else{
echo"<h2>Welcome to Beta Installer!</h2><br>";
echo"<h3>Please insert the following informations:</h3><br>";
echo'
<form method="POST" action="?step=0&submit=yes">
	<p class="field_name">Seitenname: </p><input name="sitename" class="input_field" type="text"><br>
	<p class="field_name">Administrator Benutzername: </p><input name="admin_username" class="input_field" type="text"><br>
	<button type="submit" class="buttons">Begin installation</button>
</form>';
}