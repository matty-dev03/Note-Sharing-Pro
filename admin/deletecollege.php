<?php
require_once("../dboperation.php");
$obj=new dboperation();
if(isset($_GET["college_id"]))
{
    $college_id=$_GET["college_id"];
   $sqlquery="delete from tbl_college where college_id=$college_id";
    $result=$obj->executequery($sqlquery);
}
if($result==1)
{
    echo "<script>alert('College Details Delete Successfully');window.location='viewcolleges.php'</script>";
}
else
{
   echo "<script>alert('College Details Delete Failed')</script>";
}
?>