<?php
include_once("../dboperation.php");
$obj=new dboperation();
if(isset($_POST["submit"]))
{
  $department=$_POST["department_id"];
    $name=$_POST["coursename"];
    $sem=$_POST["semcount"];
    $sqlquery="select * from tbl_course where course_name='$name'";
    $result=$obj->executequery($sqlquery);
    $rows=mysqli_num_rows($result);
    if($rows==0)
    {
        $sqlquery1 = "insert into tbl_course(department_id,course_name,sem_count)values('$department','$name','$sem')";
        $result1 =$obj->executequery($sqlquery1);
        if($result1==1)
        {
        echo "<script>alert('Course Details Inserted Succesfully');window.location='viewcourse.php'</script>";
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