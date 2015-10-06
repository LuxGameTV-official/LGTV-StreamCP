<?php
//Security check...
if(!defined('SECURITY'))
	{
		exit("Sorry, Nope.");
}

function my_autoloader($class) {
    include $class . '.class.php';
}

spl_autoload_register('my_autoloader');