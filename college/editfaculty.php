<?php
include_once("header.php");
include_once("../dboperation.php");
$obj = new dboperation();
$faculty_id = $_GET['faculty_id'];
$sql = "select * from tbl_faculty f inner join tbl_location l on f.location_id=l.location_id where faculty_id='$faculty_id'";
$res = $obj->executequery($sql);
$row2 = mysqli_fetch_array($res);
$sqlquery = "select * from tbl_district";
$sqlquery1 = "select * from tbl_college_department l inner join tbl_department d on l.department_id=d.department_id ";
$result1 = $obj->executequery($sqlquery1);
$result = $obj->executequery($sqlquery);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>Faculty Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINEARICONS -->
    <link rel="stylesheet" href="college department/fonts/linearicons/style.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="college department/faculty/css/style.css">
</head>

<b>

    <div class="wrapper">
        <div class="inner" style="margin-right: 393px;
    margin-left: 330px;">
            <img src="images/image-1.png" alt="" class="image-1">
            <form action="facultyeditaction.php" method="POST"  class="forms-sample">
                <h3>Faculty Edit</h3>
                <div class="form-holder">
                    Name:<input type="text" class="form-control" placeholder="Name" name="name"
                        value="<?php echo $row2['name']; ?>">
                </div>

                <div class="form-holder">
                    Email:<input type="email" class="form-control" placeholder="Email" name="email"
                        value="<?php echo $row2['email']; ?>">
                </div>

                <div class="form-holder">
                    Phone No.:<input type="number" class="form-control" placeholder="Phone No." name="phnno"
                        value="<?php echo $row2['phoneno']; ?>">
                </div>
                <div>
                    Department:
                    <select id="department_id" name="department" class="form-control">
                        <option>Select Department</option>
                        <?php
                        while ($display = mysqli_fetch_array($result1)) {
                            ?>
                            <option value="<?php echo $display["college_department_id"]; ?>" <?php echo ($display["college_department_id"] == $row2["college_department_id"]) ? "selected=selected" : ""; ?>>
                                <?php echo $display["department_name"]; ?></option>
                            <?php
                        }
                        ?>

                    </select>

                </div>
               

                </br>
                <input type="hidden" name="facultyid" value="<?php echo $faculty_id;?>">
                <button type="submit" name="Submit" class="btn btn-primary mr-2">Update</button>
                <button type="reset" class="btn btn-white mr-2">Cancel</button>

        </div>
    </div>
    </br>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<?php
include_once("footer.php");
?>