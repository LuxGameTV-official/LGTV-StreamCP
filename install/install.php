<?php
if(!defined('SECURITY'))
	{
		exit("Sorry, Nope.");
}
echo'<html>
  <head>
  	<link rel="stylesheet" type="text/css" href="install/style.css">
    <meta charset="utf-8">
    <title>Installer</title>
  </head>
<body>
';
if(isset($_GET['step'])){
	switch ($_GET['step'])
	{
		case 0:
			require_once('step_0.php');
			break;
		case 1:
			require_once('step_1.php');
			break;
		case 2:
			require_once('step_2.php');
			break;
		default:
			echo'Error occurred';
	}
}else{
	require_once('step_0.php');
}

echo'</body>
</html>
';