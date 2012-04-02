<?php //login.php

error_reporting(E_ERROR | E_PARSE);

$db_hostname = 'localhost';
$db_database = 'jeremyka_blog';
$db_username = 'jeremyka_admin';
$db_password = 'p@ssword';

mysql_connect($db_hostname, $db_username, $db_password)
	or die ('Unable to connect to database: ' . mysql_error());
mysql_select_db($db_database)
	or die ('Unable to select database: ' . mysql_error());

date_default_timezone_set('America/Los_Angeles');
$todayDate = date('mdY');
$dateYear = "year".substr($todayDate, 4, 4);
$dateDate = substr($todayDate, 2, 2);
$dateMonth = date('F');
?>