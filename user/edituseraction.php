<?php 

  include_once ("../dboperation.php");
  $obj = new dboperation();

        $id = $_POST['user_id'];
        $name = $_POST['txtname'];
        $phone = $_POST['txtphone'];
        $email = $_POST['txtemail'];
        $username = $_POST['txtusername'];
        $password = $_POST['txtpassword'];
        $sqlquery = "UPDATE tbl_student SET name='$name',phone='$phone',email='$email',username='$username',password='$password' WHERE user_id ='$id'";
        $result = $obj->executequery($sqlquery);
        if($result == 1){
          echo "<script>alert('Updated successfully');window.location='../User/index.php';</script>";
        }
        else{
        echo "<script>alert('Updation failed');window.location='../User/index.php';</script>";
        }
?>