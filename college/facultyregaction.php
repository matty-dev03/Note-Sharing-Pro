<?php
session_start();
include_once("../dboperation.php");
$obj = new dboperation();
    $college = $_SESSION["college_id"];
    $location=$_POST["location"];
    $name = $_POST["name"];
    $phone = $_POST["phnno"];
    $email = $_POST["email"];
    $department = $_POST["department"];
    $date = Date('y-m-d');
    $username = $_POST["username"];
    $password = $_POST["password"];
      $sqlquery = "select * from tbl_faculty where username='$username' and email='$email' ";
      $result = $obj->executequery($sqlquery);
      $rows = mysqli_num_rows($result);
  
     if ($rows == 0) {
     $sqlquery1 ="INSERT INTO tbl_faculty (college_id, name, location_id, phoneno, email,college_department_id, username, regdate, password) VALUES ('$college','$name','$location','$phone','$email','$department','$username','$date','$password')";
      
    $result1=$obj->executequery($sqlquery1);

    if ($result1 == 1) {
       echo "<script>alert('Faculty Registration Completed');window.location='viewfaculty.php'</script>";
    } else {
         echo "<script>alert('Faculty Registration Failed');window.location='facultyreg.php'</script>";
    }
}
else
{
   echo "<script>alert('Duplicate Entry')</script>";
}

?>
