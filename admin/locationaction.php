<?php
include_once("../dboperation.php");
$obj=new dboperation();
if(isset($_POST["submit"]))
{
  $district=$_POST["district_id"];
    $name=$_POST["location"];
    $sqlquery="select * from tbl_location where location_name='$name'";
    $result=$obj->executequery($sqlquery);
    $rows=mysqli_num_rows($result);
    if($rows==0)
    {
       $sqlquery1 = "insert into tbl_location(district_id,location_name)values('$district','$name')";
        $result1 =$obj->executequery($sqlquery1);
        if($result1==1)
        {
        echo "<script>alert('location Details Inserted Succesfully');window.location='viewlocation.php'</script>";
        }
        else
        {
       echo "<script>alert('Insertion Failed')</script>";
        }
    }
else
{
   echo "<script>alert('Duplicate Entry')</script>";
}
}
?>