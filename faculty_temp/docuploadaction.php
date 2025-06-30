<?php
session_start();
include_once("../dboperation.php");
$obj=new dboperation();

    $user = $_SESSION["user_id"];
    $name=$_POST["name"];
    $category=$_POST["category"];
    $subject=$_POST["subject"];
    $status="Uploaded";
    $remark="NULL";
    $date=Date('y-m-d');
    $file=$_FILES["document"]["name"];
    move_uploaded_file($_FILES["document"]["tmp_name"],"../upload/document/".$file);

   $sqlquery="INSERT INTO tbl_document(document_name,category,subject,document,status,remark,coin,upload_date,user_id,type)values('$name','$category','$subject','$file','$status','$remark','0','$date','$user','Faculty')";
    $result=$obj->executequery($sqlquery);
    
if($result==1)
{
 echo "<script>alert('Document Insertion Successfully');window.location='index.php'</script>";
}
 else
{
 echo "<script>alert('Document Insertion Failed');window.location='documentupload.php'</script>";
}  
 
?>      