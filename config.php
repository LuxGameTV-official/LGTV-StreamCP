<?php
if(!defined('SECURITY'))
	{
		exit("Sorry, Nope.");
}

//Begin of Config File:
define('SITE_NAME', 'Test system');
define('SITE_DESCRIPTION', 'This is only a test system.');
define('SEARCH_INDEX', 'NO'); //shall the website displayed in e.g. Google search?
define('SITE_URL', 'http://preview.c3oa64m96mb9y66rujdpjuf36pzoxbt9au9822mdrymk7qfr.box.codeanywhere.com'); //WITHOUT END SLASH! NO END /
//Developer Settings:
define('DEVELOPER_MODE', 'ON'); //Valid options: ON, TESTRUN, OFF
define('MYSQL_DEVELOPER_MODE', 'ON'); //Valid options: ON, OFF

//MySQL Settings:
define('DATABASE_HOST', 'localhost'); //The Database Host
define('DATABASE_PORT', '3333'); //The Database Port (It's normally port 3333) (Simply let it by 3333 ...)
define('DATABASE_NAME', 'test_lgtv'); //The Datbase Name
define('DATABASE_UNAME', 'testsystem'); //The Username 
define('DATABASE_PASSWORD', 'zRLje9hsjFDNxGun'); //Password ...
define('DATABASE_PREFIX', 'test_'); //Database Prefix (It's useful, if you have multiple systems in 1 Database (I don't recommend this!)) Example: sys1_ or stream_ or ...

define('IS_INSTALLED', 'TRUE'); //TRUE or FALSE

define('SENDER', 'LGTV Test System');
define('SENDERMAIL', 'noreply@anghenfil.de');