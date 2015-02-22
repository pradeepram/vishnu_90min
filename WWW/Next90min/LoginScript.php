<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbcon.php');
		
			header("Content-type: text/plain");
$username = (string) $_GET["username"];
$pwd  = (string) $_GET["pwd"];
	
	print $username;
	print $pwd;
	
	
		
		$retrieve = mysql_query("select user_id from user_registration
								 WHERE username='$username' AND password='$pwd' ");
			$check_result = mysql_num_rows(@$retrieve);
		
		
		echo $check_result;

?>