<?php
if(isset($_GET['submit'])){
	//Here check if inserts are correct:
	//Comming soon ;)
	if($inserts_correct == "TRUE"){ //If Inserts are correct, redirect to next site
		header("Location: ?step=1");
	}

}else{
echo"<h2>Welcome to Beta Installer!</h2><br>";
echo"<h3>Please insert the following informations:</h3><br>";
echo'<form action="?step=0&submit=yes">
<p>
	<input type="text">
	<button type="submit" class="buttons">Begin installation</button>
</p>
</form>';
}