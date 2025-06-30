<?php
include_once("../dboperation.php");
$obj=new dboperation();
$document_id=$_GET["document_id"];
$query="update tbl_document set status='Accept' where document_id=$document_id";
$result=$obj->executequery($query);
echo"<script>alert('Accept Successfully'); window.location='coinallocation.php'</script>";
?>