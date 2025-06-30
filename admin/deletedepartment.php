<?php
require_once("../dboperation.php");
$obj=new dboperation();
if(isset($_GET["department_id"]))
{
    $department_id=$_GET["department_id"];
   $sqlquery="delete from tbl_department where department_id=$department_id";
    $result=$obj->executequery($sqlquery);
}
if($result==1)
{
    echo "<script>alert('Department Details Delete Successfully');window.location='departmentview.php'</script>";
}
else
{
   echo "<script>alert('Department Details Delete Failed')</script>";
}
?>