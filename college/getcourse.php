<?php
session_start();
include_once("../dboperation.php");
$obj = new dboperation();
// $empid = $_SESSION['employeeid'];
$college_id = $_SESSION['college_id'];
$department_id = $_POST["college_department_id"];
// echo ($workdate);
 $sql = "SELECT * FROM tbl_course c inner join
 tbl_college_department cd on c.department_id=cd.department_id 
 where cd.college_department_id='$department_id' and cd.college_id='$college_id'";
$res = $obj->executequery($sql);
?>

<div id="chk">
    <?php
    while ($r = mysqli_fetch_array($res)) {
        ?>

        <input type="checkbox" name="course[]" value="<?php echo $r['course_id']; ?>">
        <label for="course1"><?php echo $r['course_name'] ?></label><br>
        <?php
    }
    ?>
</div>