<?php
	include_once("../dboperation.php");
	$obj = new dboperation();
	session_start();
	if(isset($_POST['msg'])){		
		$msg=$_POST['msg'];
		$id=$_POST['id'];
		$sql="insert into chat(chatroomid, message, userid, chat_date) values ('$id', '$msg' , '".$_SESSION['user_id']."', NOW())";
		$result1=$obj->executequery($sql);
	}
?>