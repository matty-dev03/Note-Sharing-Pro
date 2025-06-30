<?php
session_start();
require_once ("../dboperation.php");
$obj = new dboperation();

$username = $_POST["username"];
$password = $_POST["password"];

// Query for admin login
$sqlquery = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
$result = $obj->executequery($sqlquery);

if (mysqli_num_rows($result) == 1) {
    // Admin login success
    $row = mysqli_fetch_array($result);
    $_SESSION["login_id"] = $row["login_id"];
    header("location:../admin/index.php");
} else {
    // Query for college login
    $sqlquery = "SELECT * FROM tbl_college WHERE college_username='$username' AND password='$password'";
    $result = $obj->executequery($sqlquery);

    if (mysqli_num_rows($result) == 1) {
        // College login success
        $row = mysqli_fetch_array($result);
        $_SESSION["college_username"] = $row["college_username"];
        $_SESSION["college_id"] = $row["college_id"];
        header("location:../college/index.php");
    } else {
        // Query for student login
        $sqlquery = "SELECT * FROM tbl_student WHERE username='$username' AND password='$password'";
        $result = $obj->executequery($sqlquery);

        if (mysqli_num_rows($result) == 1) {
            // Student login success
            $row = mysqli_fetch_array($result);
            $_SESSION["username"] = $row["username"];
            $_SESSION["user_id"] = $row["user_id"];
            header("location:../user/index.php");
        } else {
            // Query for faculty login
            $sqlquery = "SELECT * FROM tbl_faculty WHERE username='$username' AND password='$password'";
            $result = $obj->executequery($sqlquery);

            if (mysqli_num_rows($result) == 1) {
                // Faculty login success
                $row = mysqli_fetch_array($result);
                $_SESSION["username"] = $row["username"];
                $_SESSION["user_id"] = $row["faculty_id"];
                header("location:../faculty/index.php");
            } else {
                // If no matching credentials were found in any of the tables
                echo "<script>alert('Invalid Username/Password!!'); window.location='login.php';</script>";
            }
        }
    }
}
?>
