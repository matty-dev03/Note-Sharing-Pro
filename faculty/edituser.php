<?php
include_once ('header.php');
require_once("../dboperation.php");
// session_start();
$obj = new dboperation();
$user_id = $_GET["user_id"];
$sqlquery = "select * from tbl_faculty where faculty_id = $user_id";
$result = $obj->executequery($sqlquery);
$row = mysqli_fetch_array($result);
$sqlquery1 = "select * from tbl_district";
$result1 = $obj->executequery($sqlquery1);
$sql1 = "select * from tbl_college";
$result2 = $obj->executequery($sql1);
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<hr>
<br>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-3"> <!-- left col -->
            <!-- <div class="text-center">
                <img src="../upload/students/<?php echo $row["user_image"]; ?>" class="avatar img-circle img-thumbnail" alt="avatar">
                <h4>Upload a different photo...</h4>
                <input type="file" class="text-center center-block file-upload" id="exampleInputimg" name="filephoto" placeholder="Photo">
            </div> -->
            <hr><br>
        </div> <!-- /col-3 -->

        <div class="col-sm-9"> <!-- main col -->
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                    <form class="form" action="editstudentaction.php" method="post" id="registrationForm">
                        <input type="hidden" name="user_id" value="<?php echo $row["faculty_id"]; ?>">

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="name"> Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="name" value="<?php echo $row["name"]; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="phone"> Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="<?php echo $row["phoneno"]; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?php echo $row["email"]; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="college_id">College Name</label>
                                <select id="college_id" name="college_id" class="form-control"  value="<?php echo $row["college_id"]; ?>">
                                    <option>Choose your College</option>
                                    <?php
                                    while ($display = mysqli_fetch_array($result2)) {
                                        ?>
                                        <option value="<?php echo $display["college_id"]; ?>"><?php echo $display["college_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="collegedepartmentid">Department Name</label>
                                <select id="collegedepartmentid" name="collegedepartmentid" class="form-control input_field search_form_degree">
                                    <option>Choose your Department</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="district_id">District</label>
                                <select class="form-control input_field search_form_degree" id="district_id" name="district">
                                    <option>Choose your District</option>
                                    <?php
                                    while ($display = mysqli_fetch_array($result1)) {
                                        ?>
                                        <option value="<?php echo $display["district_id"]; ?>"><?php echo $display["district_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="location">Location</label>
                                <select id="location" name="location" class="form-control input_field search_form_degree">
                                    <option>Choose your Location</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                        </div>
                    </form>

                    <hr>
                </div> <!-- /tab-pane -->
            </div> <!-- /tab-content -->
        </div> <!-- /col-9 -->
    </div> <!-- /row -->

    <?php include_once("footer.php"); ?>
</div> <!-- /container -->

<script src="../jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function() {
    $("#district_id").change(function() {
        var district_id = $(this).val();
        $.ajax({
            type: "POST",
            url: "getlocation.php",
            data: "district_id=" + district_id,
            success: function(data) {
                $("#location").html(data);
            }
        });
    });

    $("#college_id").change(function() {
        var college_id = $(this).val();
        $.ajax({
            type: "POST",
            url: "getcollegedepartment.php",
            data: "college_id=" + college_id,
            success: function(data) {
                $("#collegedepartmentid").html(data);
            }
        });
    });
});
</script>
