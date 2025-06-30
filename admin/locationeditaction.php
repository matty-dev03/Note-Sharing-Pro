<?php
include_once("../dboperation.php");
$obj=new dboperation();


if(isset($_POST["submit"]))
{
    $location_id=$_POST["location_id"];
    $name=$_POST["location_name"];
    $district=$_POST["district_id"];
    // $image = $_FILES['img']['name'];
    // move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$image);
   $sqlquery="UPDATE tbl_location set location_name='$name' where location_id='$location_id'";
    $result=$obj->executequery($sqlquery);

    if($result==1)
    {
      echo "<script>alert('Category Details Update Successfully');window.location='viewlocation.php'</script>";
    }
     else
    {
       echo "<script>alert('Category Details Update Failed');window.location='viewlocation.php'</script>";
    }
} 
?>