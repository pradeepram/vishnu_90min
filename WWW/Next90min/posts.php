	<?php
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbcon.php');
	
	function checkValues($value)
	{
		 $value = trim($value);
		 
		if (get_magic_quotes_gpc()) {
			$value = stripslashes($value);
		}
		
		 $value = strtr($value,array_flip(get_html_translation_table(HTML_ENTITIES)));
		
		 $value = strip_tags($value);
		$value = mysql_real_escape_string($value);
		$value = htmlspecialchars ($value);
		return $value;
		
	}	
	function checkValues1($value1)
	{
		 $value1 = trim($value1);
		 
		if (get_magic_quotes_gpc()) {
			$value1 = stripslashes($value1);
		}
		
		 $value1 = strtr($value1,array_flip(get_html_translation_table(HTML_ENTITIES)));
		
		 $value1 = strip_tags($value1);
		$value1 = mysql_real_escape_string($value1);
		$value1 = htmlspecialchars ($value1);
		return $value1;
		
	}	
	function clickable_link($text = '')
	{
		
		$text = preg_replace('#(script|about|applet|activex|chrome):#is', "\\1:", $text);
		$ret = ' ' . $text;
		$ret = preg_replace("#(^|[\n ])([\w]+?://[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<a href=\"\\2\" target=\"_blank\">\\2</a>", $ret);
		
		$ret = preg_replace("#(^|[\n ])((www|ftp)\.[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<a href=\"http://\\2\" target=\"_blank\">\\2</a>", $ret);
		$ret = preg_replace("#(^|[\n ])([a-z0-9&\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)*[\w]+)#i", "\\1<a href=\"mailto:\\2@\\3\">\\2@\\3</a>", $ret);
		$ret = substr($ret, 1);
		return $ret;
	}
if(checkValues1($_REQUEST['value1']))
	{
		$userip = $_SERVER['REMOTE_ADDR'];
		
		$result = mysql_query("SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM facebook_posts group by date_created ORDER BY `p_id` DESC");
	
	}
	$next_records = 10;
	$show_more_button = 0;
	if(checkValues($_REQUEST['value']))
	{		
		$userip = $_SERVER['REMOTE_ADDR'];		
		mysql_query("INSERT INTO facebook_posts (post,f_name,userip) VALUES('".checkValues($_REQUEST['value'])."','User1','".$userip."')");
		$result = mysql_query("SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM facebook_posts group by date_created ORDER BY `p_id` DESC ");		
	}
	elseif($_REQUEST['show_more_post']) // more posting paging
	{
		$next_records = $_REQUEST['show_more_post'] + 10;
		
		$result = mysql_query("SELECT *,
		UNIX_TIMESTAMP() - date_created AS TimeSpent FROM facebook_posts order by p_id desc limit ".$_REQUEST['show_more_post'].", 10");
		
		$check_res = mysql_query("SELECT * FROM facebook_posts group by date_created ORDER BY `p_id` desc".$next_records.", 10");
		
		$show_more_button = 0; // button in the end
		
		$check_result = mysql_num_rows(@$check_res);
		if($check_result > 0)
		{
			$show_more_button = 1;
		}
	}
	else
	{	
		$show_more_button = 1;
		$result = mysql_query("SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM facebook_posts group by date_created ORDER BY `p_id` desc limit 0,10");
		
	}
	
	while ($row = mysql_fetch_array($result))
	{
		$comments = mysql_query("SELECT *,
		UNIX_TIMESTAMP() - date_created AS CommentTimeSpent FROM facebook_posts_comments where post_id = ".$row['p_id']." order by c_id asc");		?>
	   <div class="friends_area" id="record-<?php  echo $row['p_id']?>">

	   <img src="99.jpeg" style="float:left;" alt="" />

		   <label style="float:left" class="name">

		   <b><?php echo $row['f_name'];?></b>

		   <em><?php  echo clickable_link($row['post']);?></em>
		   <br clear="all" />

		   <span>
		   <?php  
		   
		    // echo strtotime($row['date_created'],"Y-m-d H:i:s");
   		    
		    $days = floor($row['TimeSpent'] / (60 * 60 * 24));
			$remainder = $row['TimeSpent'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
			
			if($days > 0)
			echo date('F d Y', $row['date_created']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			echo "few seconds ago";		
			elseif($days == 0 && $hours == 0)
			echo $minutes.' minutes ago';
			else
			echo "few seconds ago";	
			
		   ?>
		   
		   </span>
		   <!-- For like and unlike -->
		   <span id="like-panel-<?php  echo $row['p_id']?>">
				
			<?php
			if($like_ip_num > 0){?>
			<a href="javascript: void(0)" id="post_id<?php  echo $row['p_id']?>" class="Unlike">unlike</a>
				
			<?php }else{?>
				<a href="javascript: void(0)" id="post_id<?php  echo $row['p_id']?>" class="LikeThis">like</a>
			<?php }?>
				
			</span>
		   <input type="hidden" value="<?php echo $records?>" id="totals-<?php  echo $row['p_id'];?>" />
			
		    <br clear="all" />
				<div class="commentPanel" align="left">
				<img src="like.png" style="float:left;" alt="" />
				
				<span id="like-stats-<?php  echo $row['p_id'];?>"> <?php echo $likes;?> </span> people like this.
				
				<span id="like-loader-<?php  echo $row['p_id']?>">&nbsp;</span>
			
		   <a href="javascript: void(0)" id="post_id<?php  echo $row['p_id']?>" class="showCommentBox">Comments</a>

			</div>
		    </label>
			
			<?php
			$userip = $_SERVER['REMOTE_ADDR'];
			?>
		  	<a href="#" id="post_id<?php  echo $row['p_id']?>" class="status"> Done</a> 
		   
			<?php
			$userip = $_SERVER['REMOTE_ADDR'];
			?>
		  	<a href="#" id="post_id<?php  echo $row['p_id']?>" class="undone"> Not Done</a> 
		   
			<?php
			$userip = $_SERVER['REMOTE_ADDR'];
			?>
		  	<a href="#" id="post_id<?php  echo $row['p_id']?>" class="delete" style="display: inline !important;}" > Remove</a> 
			
			
			
			
			
			
			
			
			
			
			
			
		    <br clear="all" />
			<div id="CommentPosted<?php  echo $row['p_id']?>">
				<?php
				$comment_num_row = mysql_num_rows(@$comments);
				if($comment_num_row > 0)
				{
					while ($rows = mysql_fetch_array($comments))
					{
						$days2 = floor($rows['CommentTimeSpent'] / (60 * 60 * 24));
						$remainder = $rows['CommentTimeSpent'] % (60 * 60 * 24);
						$hours = floor($remainder / (60 * 60));
						$remainder = $remainder % (60 * 60);
						$minutes = floor($remainder / 60);
						$seconds = $remainder % 60;						
						?>
					<div class="commentPanel" id="record-<?php  echo $rows['c_id'];?>" align="left">
						<img src="small.png" width="40" class="CommentImg" style="float:left;" alt="" />
						<label class="postedComments">
							<?php  echo clickable_link($rows['comments']);?>
						</label>
						<br clear="all" />
						<span style="margin-left:43px; color:#666666; font-size:11px">
						<?php
						
						if($days2 > 0)
						echo date('F d Y', $rows['date_created']);
						elseif($days2 == 0 && $hours == 0 && $minutes == 0)
						echo "few seconds ago";		
						elseif($days2 == 0 && $hours == 0)
						echo $minutes.' minutes ago';
						else
			echo "few seconds ago";	
						?>
						</span>
						<?php
						$userip = $_SERVER['REMOTE_ADDR'];
						if($rows['userip'] == $userip){?>
						&nbsp;&nbsp;<a href="#" id="CID-<?php  echo $rows['c_id'];?>" class="c_delete">Delete</a>
						<?php
						}?>
					</div>
					<?php
					}?>				
					<?php
				}?>
			</div>
			<div class="commentBox" align="right" id="commentBox-<?php  echo $row['p_id'];?>" <?php echo (($comment_num_row) ? '' :'style="display:none"')?>>
				<img src="small.png" width="40" class="CommentImg" style="float:left;" alt="" />
				<label id="record-<?php  echo $row['p_id'];?>">
					<textarea class="commentMark" id="commentMark-<?php  echo $row['p_id'];?>" name="commentMark" cols="60"></textarea>
				</label>
				<br clear="all" />
				<a id="SubmitComment" class="small button comment"> Comment</a>
			</div>
	   </div>
	<?php
	}
	if($show_more_button == 1){?>
	<div id="bottomMoreButton">
	<a id="more_<?php echo @$next_records?>" class="more_records" href="javascript: void(0)">Older Posts</a>
	</div>
	<?php
	}?>
	