<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	include('dbcon.php');
	
	$userip = $_SERVER['REMOTE_ADDR'];
	
	mysql_query("update facebook_posts set status=1 where p_id= '".$_REQUEST['id']."'");	
?>