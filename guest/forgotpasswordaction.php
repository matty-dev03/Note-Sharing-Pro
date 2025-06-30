<?php
function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = substr(str_shuffle($characters), 0, $length);

    return $randomString;
}
?>


<?php
include_once("../dboperation.php");
$obj = new dboperation();
$username = $_POST["txtusername"];
$randomString = generateRandomString();

$sqlquery = "select * from tbl_student where username='$username' ";
$result = $obj->executequery($sqlquery);


if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $uname = $row["name"];
    $email = $row["email"];
    $sql2 = "update tbl_student set password='$randomString' where username='$username'";
    $result1 = $obj->executequery($sql2);
echo "<script>alert('Successfully reset your password. New password is send to your mail,please check it....');window.location='login.php' </script>";

    $bodyContent = "Dear $uname, Your New Password is:$randomString";
    $mailtoaddress = $email;
    require('phpmailer.php');
}

 else {


    echo "<script>window.location='login.php'</script>";

}


?>