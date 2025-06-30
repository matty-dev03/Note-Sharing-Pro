<?php
include_once("../dboperation.php");
$obj = new dboperation();

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $location = $_POST["location"];
    $college = $_POST["college"];
    $department = $_POST["department"];
    $dob = $_POST["dob"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $photo=$_FILES["filephoto"]["name"];
    $date = Date('y-m-d');
    $coin = 10;
    move_uploaded_file($_FILES["filephoto"]["tmp_name"],"../upload/students/".$photo);
    $regdate = Date('y-m-d');
  
      $sqlquery = "select * from tbl_student where username='$username' ";
      $result = $obj->executequery($sqlquery); 
      $rows = mysqli_num_rows($result);
      $sql1 = "SELECT IFNULL(MAX(wallet_no), 1) + 103 AS wallet_no FROM tbl_student";
      
        $result1 = $obj->executequery($sql1);
        $display=mysqli_fetch_array($result1);
        $wallet_no = $display['wallet_no']; 
     if ($rows == 0) {
    $sqlquery1 = "INSERT INTO tbl_student (name,phone,email,gender,location_id, college_id, department_id,dob,username,password,user_image, regdate , wallet_no) VALUES ('$name', '$phone', '$email', '$gender', '$location',  '$college', '$department' , '$dob' ,'$username','$password','$photo','$date',$wallet_no)";
    $result1 = $obj->executequery($sqlquery1);
    $sql2="INSERT INTO tbl_walletinfo (wallet_no,coin_count) values ('$wallet_no','$coin')";
    $result2 = $obj->executequery($sql2);
    if ($result1 == 1) {
      echo "<script>alert('Student Registration Successful');window.location='login.php'</script>";
    } else {
        echo "<script>alert('Student Registration Failed');window.location='reguser.php'</script>";
    }
}
else
{
   echo "<script>alert('Duplicate Entry')</script>";
}

?>
