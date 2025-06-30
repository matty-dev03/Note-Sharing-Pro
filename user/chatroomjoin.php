<?php 
session_start();
	//include('session.php');
	include_once("../dboperation.php");
$obj=new dboperation();
	
	$cid=$_GET['id'];
	
	$userid=$_SESSION['user_id'];
	 $sql="insert into chat_member (chatroomid,  userid,status) values ('$cid', $userid,'requested')";
	$result=$obj->executequery($sql);
	echo "<script>alert('Request Send');window.location='chat.php'</script>";
	
	
?>