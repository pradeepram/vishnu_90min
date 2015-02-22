<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbcon.php');
		
		header("Content-type: text/plain");
$base = (string) $_GET["emailaddr"];
$exp  = (string) $_GET["username"];
$exp1  = (string) $_GET["password1"];
		
	
	 $add = mysql_query("INSERT INTO user_registration(emailaddress,username,password) VALUES('$base','$exp','$exp1')");
	 $check_result = mysql_num_rows(@$add);
		
		
		echo $check_result;
		return $base;
?>