<?php
require_once("../dboperation.php");
$obj=new dboperation();
if(isset($_GET["college_department_id"]))
{
    $college_department_id=$_GET["college_department_id"];
    $sqlquery="delete from tbl_college_department where college_department_id=$college_department_id";
    $result=$obj->executequery($sqlquery);
}
if($result==1)
{
    echo "<script>alert('College Deparment Deleted Successfully');window.location='viewdepartment.php'</script>";
}
else
{
   echo "<script>alert('College Department Deletion Failed');window.location='viewdepartment.php'</script>";
}
?>