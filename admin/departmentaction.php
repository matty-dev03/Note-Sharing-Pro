<?php
include_once("../dboperation.php");
$obj=new dboperation();

if(isset($_POST['submit']))
{
    $department=$_POST["departmentname"];
    $photo=$_FILES["filephoto"]["name"];
    move_uploaded_file($_FILES["filephoto"]["tmp_name"],"../upload/".$photo);
    
 $sqlquery="insert into tbl_department(department_name,department_logo)values('$department','$photo')";
      $result=$obj->executequery($sqlquery);
if($result==1)
{
echo "<script>alert('Department Details Insertion Successfully');window.location='departmentview.php'</script>";
}
 else
{
  echo "<script>alert('Department Details Insertion Failed');window.location='departmentview.php'</script>";
}  
} 
?>      