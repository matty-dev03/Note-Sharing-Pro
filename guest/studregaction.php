<?php
include_once("../dboperation.php");
$obj = new dboperation();
$name = $_POST["txtstudname"];
$email = $_POST["txtemail"];
$phone = $_POST["txtphno"];
$image=$_FILES['image']['name'];
 move_uploaded_file($_FILES['image']['tmp_name'],"../upload/".$image);
    $college = $_POST["college_id"];
    $department = $_POST["collegedepartmentid"];
    $location=$_POST["location"];
    $date = Date('y-m-d');
    $dob = $_POST['dob'];
    $username = $_POST["txtusername"];
    $password = $_POST["txtpassword"];
    $coin = 10;
      $sqlquery = "select * from tbl_student where username='$username' ";
      $result = $obj->executequery($sqlquery); 
      $rows = mysqli_num_rows($result);
      $sql1 = "SELECT IFNULL(MAX(wallet_no), 100) +1 AS wallet_no FROM tbl_student";
      
        $result1 = $obj->executequery($sql1);
        $display=mysqli_fetch_array($result1);
        $wallet_no = $display['wallet_no']; 
     if ($rows == 0) {
      $sqlquery1 ="INSERT INTO tbl_student (name,phone,email,user_image,dob,college_id,department_id,location_id, username, regdate, password,wallet_no) VALUES ('$name','$phone','$email','$image','$dob','$college','$department','$location','$username','$date','$password','$wallet_no')";
      $result1=$obj->executequery($sqlquery1); 
      $bodyContent = "Dear $name, Your registering is sucessfully completed in the website. You can access the Note Sharing Pro.We are delighted to confirm that your registration with Note Sharing Pro has been successfully completed. You can now access our platform to share notes, connect with others, and expand your knowledge.
";
            $mailtoaddress = $email;
            require('phpmailer.php');  
     $sql2="INSERT INTO tbl_walletinfo (wallet_no,coin_count) values ('$wallet_no','$coin')";
    $result2 = $obj->executequery($sql2);
    if ($result1 == 1) {
      echo "<script>alert('Student Registration Successful');window.location='login.php'</script>";
    } else {
        echo "<script>alert('Student Registration Failed');window.location='studentreg.php'</script>";
    }
}
else
{
  //  echo "<script>alert('Duplicate Entry')</script>";
}

?>