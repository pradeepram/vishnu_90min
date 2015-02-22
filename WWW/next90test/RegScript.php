<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbcon.php');
	
	//$add = mysql_query("INSERT INTO user_registration(emailaddress,username,password) VALUES('".$_REQUEST['email']."','".$_REQUEST['username']."','".$_REQUEST['pwd']."')");
		$add = mysql_query("INSERT INTO user_registration(emailaddress,username,password) VALUES('".$_REQUEST['email']."','".$_REQUEST['username']."','".$_REQUEST['pwd']."')");
?>