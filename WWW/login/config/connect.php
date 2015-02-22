<?php
error_reporting(0);
$timezone = "Asia/Manila";
date_default_timezone_set($timezone);
ob_start();
session_start();
require_once("dbConfig.php");

	$connection = mysql_connect(SERVER,DBUSER,DBPASS) or die('Unable to establish a DB connection'.mysql_error());
	$database = mysql_select_db(DBNAME);
	@mysql_query("SET names UTF8");
	
	

?>