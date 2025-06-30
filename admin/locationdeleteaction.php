<?php
include_once("../dboperation.php");
$obj=new dboperation();
$locaid=$_GET["lid"];
  $sql="delete from tbl_location where location_id='$locaid'";
    $result=$obj->executequery($sql);
    if($result==1)
        {
            echo"<script>alert('Location Details deleted Successfully');window.location='locationview.php'</script>";
        }
        else
        {
             echo"<script>alert('Deletion Failed')</script>";

        }
?>