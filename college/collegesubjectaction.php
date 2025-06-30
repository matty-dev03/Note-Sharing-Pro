<?php
session_start();
include ("../dboperation.php");
$obj = new dboperation;

$course = $_POST['course'];
$subject = $_POST['subject'];
$sem = $_POST['sem'];
$college_id=$_SESSION['college_id'];


   $sql = "INSERT INTO tbl_subject (course_id , sem_id , subject_name,college_id) VALUES ('$course', '$sem' , '$subject','$college_id')";
  $res = $obj->executequery($sql);
    if($res==1)
    {
    echo "<script>alert('Course Details Inserted Succesfully');window.location='viewcourse.php'</script>";
    }
    else
    {
   echo "<script>alert('Insertion Failed');window.location='college_subject.php'</script>";
    }

?>