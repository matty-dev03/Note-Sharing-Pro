
<?php
include_once("../dboperation.php");
$obj=new dboperation();
    $college_id=$_POST["college_id"];
    $name=$_POST["collegename"];
    $phno=$_POST["college_phone_number"];
    $email=$_POST["college_email"];
    $image = $_FILES['filephoto']['name'];
    if($image=="")
    {
       $sqlquery1=$sqlquery="UPDATE tbl_college set college_name='$name', college_phone_number='$phno', college_email='$email'  where college_id='$college_id'";
        $result=$obj->executequery($sqlquery1);
    }
    else
    {
    move_uploaded_file($_FILES['filephoto']['tmp_name'],"../upload/college/".$image);
 $sqlquery="UPDATE tbl_college set college_name='$name', college_phone_number='$phno', college_email='$email' , college_logo= '$image' where college_id='$college_id'";
    $result=$obj->executequery($sqlquery);
    }
    if($result==1)
    {
      echo "<script>alert('College Details Update Successfully');window.location='viewcolleges.php'</script>";
    }
     else
    {
       echo "<script>alert('College Details Update Failed');window.location='viewcolleges.php'</script>";
    }

?>