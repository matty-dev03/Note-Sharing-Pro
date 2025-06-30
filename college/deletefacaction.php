<?php
require_once("../dboperation.php");
$obj=new dboperation();
if(isset($_GET["faculty_id"]))
{
    $fac_id=$_GET["faculty_id"];
    $sqlquery="delete from tbl_faculty where faculty_id=$fac_id";
    $result=$obj->executequery($sqlquery);
}
if($result==1)
{
    echo "<script>alert('Faculty Deleted Successfully');window.location='viewfaculty.php'</script>";
}
else
{
   echo "<script>alert('Faculty Deletion Failed');window.location='viewfaculty.php'</script>";
}
?>