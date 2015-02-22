<?php
include_once'config/connect.php';

$uname  = $_POST['username'];
$email  = $_POST['emailaddr'];
$passw  = md5($_POST['password1']);
$passw2 = $_POST['password2'];
$submit = $_POST['submit'];

	if($submit) { // if you click the button submit then do the following function
			
			//inserting data to user table
		$add = mysql_query("INSERT INTO iangadot_user VALUES('','$email','$uname','$passw',NOW())");
			
			if($add == TRUE) {
			//echo "You are Successfully registered.";
				header("Location: index.php?#toregister?reg=1");
				exit();
			
		} else {
			echo "<font color=red> Failed to add the data... </font>";
		}
	}
	
	
?>