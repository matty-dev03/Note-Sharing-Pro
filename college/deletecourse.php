<?php
require_once("../dboperation.php");
$obj=new dboperation();
if(isset($_GET["college_course_id"]))
{
    $course_id=$_GET["college_course_id"];
    $sqlquery="delete from tbl_college_course where college_course_id=$course_id";
    $result=$obj->executequery($sqlquery);
}
if($result==1)
{
    echo "<script>alert('College Course Deleted Successfully');window.location='viewcourse.php'</script>";
}
else
{
   echo "<script>alert('College Course Deletion Failed');window.location='viewcourse.php'</script>";
}
?>