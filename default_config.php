<?php
if(!defined('SECURITY'))
	{
		exit("Sorry, Nope.");
}

//Begin of Config File:
define('SITE_NAME', 'Test system');
define('SITE_DESCRIPTION', 'This is only a test system.');
define('SEARCH_INDEX', 'NO'); //shall the website displayed in e.g. Google search?

//Developer Settings:
define('DEVELOPER_MODE', 'ON'); //Valid options: ON, TESTRUN, OFF

//MySQL Settings:
define('DATABASE_NAME', ''); //The Datbase Name
define('DATABASE_UNAME', ''); //The Username 
define('DATABASE_PASSWORD', ''); //Password ...
define('DATABASE_PREFIX', ''); //Database Prefix (It's useful, if you have multiple systems in 1 Database (I don't recommend this!)) Example: sys1_ or stream_ or ...


