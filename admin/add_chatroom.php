<?php 
	//include('session.php');
	include_once("../dboperation.php");
$obj=new dboperation();
	
	$chat_name=$_POST['chat_name'];
	
	
	$sql="insert into chatroom (chat_name,  date_created) values ('$chat_name', NOW())";
	$result=$obj->executequery($sql);
	echo "<script>alert('Success');window.location='chatroom.php'</script>";
	
	
?>