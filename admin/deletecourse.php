<?php
require_once("../dboperation.php");
$obj=new dboperation();
if(isset($_GET["course_id"]))
{
    $course_id=$_GET["course_id"];
   $sqlquery="delete from tbl_course where course_id=$course_id";
    $result=$obj->executequery($sqlquery);
}
if($result==1)
{
    echo "<script>alert('Course Detail Delete Successfully');window.location='viewcourse.php'</script>";
}
else
{
   echo "<script>alert('Course Detail Delete Failed')</script>";
}
?>