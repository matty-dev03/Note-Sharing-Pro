<?php
include_once("../dboperation.php");
$obj=new dboperation();


if(isset($_POST["submit"]))
{
    $course_id=$_POST["course_id"];
    $name=$_POST["course_name"];
    $department=$_POST["department_id"];
    $semcount=$_POST["sem_count"];
   $sqlquery="UPDATE tbl_course set course_name='$name' department__id='$department' sem_count='$semcount'  where course_id='$course_id'";
    $result=$obj->executequery($sqlquery);

    if($result==1)
    {
      echo "<script>alert('Category Details Update Successfully');window.location='viewcourse.php'</script>";
    }
     else
    {
       echo "<script>alert('Category Details Update Failed');window.location='viewcourse.php'</script>";
    }
} 
?>