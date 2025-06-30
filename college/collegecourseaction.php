<?php
session_start();
include("../dboperation.php");
$obj = new dboperation;
$course = $_POST['course'];
$collegedepartment = $_POST['college_department_id'];
$college = $_SESSION['college_id'];


foreach ($course as $val) {
    // Construct and execute SQL query inside the loop for each employee
    $sql = "INSERT INTO tbl_college_course (college_department_id , course_id , college_id) VALUES ('$collegedepartment','$val','$college')";
    $res = $obj->executequery($sql);

    if ($res != 1) {

        echo "<script>alert('Failed to insert courses');window.location='viewcourse.php'</script>";

    }
}


        echo "<script>alert('course insertion successfully');window.location='viewcourse.php'</script>";

?>
