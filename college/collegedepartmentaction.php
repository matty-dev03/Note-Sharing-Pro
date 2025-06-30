<?php
session_start();
include ("../dboperation.php");
$obj = new dboperation;

$department = $_POST['department'];
$college= $_SESSION['college_id'];

foreach ($department as $val) {
    // Construct and execute SQL query inside the loop for each employee
  $sql = "INSERT INTO tbl_college_department (college_id , department_id) VALUES ('$college', '$val')";
    $res = $obj->executequery($sql);

    if ($res != 1) {
        // If insertion failed, display error message and stop further processing
        echo "<script>alert('Failed to insert departments');window.location='viewdepartment.php'</script>";
        exit; // Exit the loop and further processing
    }
}

// If loop completes without any errors, it means all insertions were successful
echo "<script>alert('Department insertion successfully');window.location='viewdepartment.php'</script>";
?>