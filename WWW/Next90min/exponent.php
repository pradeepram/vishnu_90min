<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbcon.php');
		

header("Content-type: text/plain");
$base = (string) $_GET["emailaddr"];
$exp  = (string) $_GET["username"];
$exp1  = (string) $_GET["password1"];
print $base;
print $exp;
print $exp1;
?>