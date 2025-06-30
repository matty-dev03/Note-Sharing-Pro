<?php
include_once("../dboperation.php");
$obj=new dboperation();


if(isset($_POST["Submit"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phnno=$_POST["phnno"];
    $facultyid=$_POST['facultyid'];
    $sqlquery="UPDATE tbl_faculty set name='$name',email='$email',phoneno='$phnno'  where faculty_id='$facultyid'";
    $result=$obj->executequery($sqlquery);
    if($result==1)
    {
      echo "<script>alert('Faculty Details Update Successfully');window.location='viewfaculty.php'</script>";
    }
     else
    {
       echo "<script>alert('Faculty Details Update Failed');window.location='viewfaculty.php'</script>";
    }
}
?>