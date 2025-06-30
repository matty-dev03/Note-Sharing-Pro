<?php 
session_start();
	//include('session.php');
	include_once("../dboperation.php");
$obj=new dboperation();
	
	$cid=$_GET['cid'];
	
	//$userid=$_SESSION['user_id'];
	 $sql="update chat_member set status='accepted' where chat_memberid=$cid";
	$result=$obj->executequery($sql);
	echo "<script>alert('accept Send');window.location='chatroom.php'</script>";
	
	
?>