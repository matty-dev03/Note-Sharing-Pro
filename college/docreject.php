<?php
session_start();
include("../dboperation.php");
$obj = new dboperation();
$id = $_POST['document_id'];
$Remark = $_POST['Remark'];

$sql = "UPDATE tbl_document SET status='Rejected', remark='$Remark' WHERE document_id=$id";
$res = $obj->executequery($sql);
echo"<script>alert('Document Rejected'); window.location='coinallocation.php'</script>";
?>