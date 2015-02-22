<?php

include_once'config/connect.php'; //database connection

	if($_POST['submit']) {
		
		$retrieve = mysql_query("SELECT username,password FROM iangadot_user
								 WHERE username='".$_POST['username']."' AND password='".md5($_POST['password'])."' ");
			
			if(mysql_num_rows($retrieve)) {
				
				//redirect to your home page...
				// SET YOUR session
			//	$_SESSION['username_profile'] = $_POST['username'];
				
				header("Location: members_area/");
			
			} else {
				
				header("Location: ./?errorlogged=err");

					// echo "Wrong username and password!";
				
			}
	}


?>