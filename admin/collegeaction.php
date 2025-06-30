<?php
include_once("../dboperation.php");
$obj = new dboperation();

if (isset($_POST["Submit"])) {
    $college = $_POST["Collegename"];
    $district = $_POST["District"];
    $location = $_POST["Location_id"];
    $phone = $_POST["Phone"];
    $email = $_POST["Email"];
    $date = Date('y-m-d');
    $cusername = $_POST["collegeusername"];
    $password = $_POST["Password"];
    $photo=$_FILES["filephoto"]["name"];
    move_uploaded_file($_FILES["filephoto"]["tmp_name"],"../upload/college/".$photo);

      }
      $sqlquery = "select * from tbl_college where college_name='$cusername'";
      $result = $obj->executequery($sqlquery);  
     if (mysqli_num_rows($result) == 0) {
    $sqlquery1 = "INSERT INTO tbl_college (college_name, district_id, location_id, college_phone_number, college_email,college_username,college_logo, reg_date , password) VALUES ('$college', '$district', '$location', '$phone', '$email',  '$cusername', '$photo' , '$date' ,'$password')";
    $result1 = $obj->executequery($sqlquery1);

    if ($result1 == 1) {
       echo "<script>alert('College Details Inserted Successfully');window.location='viewcolleges.php'</script>";
    } else {
         echo "<script>alert('College Insertion Failed');window.location='college_registration.php'</script>";
    }
}
else
{
   echo "<script>alert('Duplicate Entry');window.location='viewcolleges.php'</script>";
}

?>
