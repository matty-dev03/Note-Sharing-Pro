<?php
require_once("../dboperation.php");
$obj=new dboperation();
if(isset($_GET["location_id"]))
{
    $location_id=$_GET["location_id"];
   $sqlquery="delete from tbl_location where location_id=$location_id";
    $result=$obj->executequery($sqlquery);
}
if($result==1)
{
    echo "<script>alert('Location Detail Delete Successfully');window.location='viewlocation.php'</script>";
}
else
{
   echo "<script>alert('Location Detail Delete Failed')</script>";
}
?>