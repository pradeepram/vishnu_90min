<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	include('dbcon.php');
	
	if($_REQUEST['postId'])
	{
		$userip = $_SERVER['REMOTE_ADDR'];
		
		mysql_query("update facebook_collapsed_likes set likes=likes where post_id= ".$_REQUEST['postId']);
		
		mysql_query("delete from facebook_collapsed_ip where userip=".$userip." AND post_id = ".$_REQUEST['postId']);
		
		$total_likes = mysql_query("SELECT * FROM facebook_collapsed_likes where post_id = ".$_REQUEST['postId']." ");
		$likes = mysql_fetch_array($total_likes);
		$likes = $likes['likes'];
	}
	echo $likes;
?>
