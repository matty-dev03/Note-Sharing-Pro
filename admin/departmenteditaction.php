<?php
include_once("../dboperation.php");
$obj=new dboperation();


if(isset($_POST["submit"]))
{
    $department_id=$_POST["department_id"];
    $name=$_POST["departmentname"];
    $image = $_FILES['filephoto']['name'];
    move_uploaded_file($_FILES['filephoto']['tmp_name'],"../upload/".$image);
 $sqlquery="UPDATE tbl_department set department_name='$name' , department_logo= '$image' where department_id='$department_id'";
    $result=$obj->executequery($sqlquery);

    if($result==1)
    {
      echo "<script>alert('Department Details Update Successfully');window.location='departmentview.php'</script>";
    }
     else
    {
       echo "<script>alert('Department Details Update Failed');window.location='departmentview.php'</script>";
    }
} 
?>