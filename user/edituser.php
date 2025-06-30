<?php
include_once ('header.php');
require_once("../dboperation.php");
// session_start();
$obj = new dboperation();
$user_id = $_GET["user_id"];
$sqlquery = "select * from tbl_student where user_id = $user_id";
$result = $obj->executequery($sqlquery);
$display = mysqli_fetch_array($result);

?>

<link href="edituser.css" rel="stylesheet" id="bootstrap-css">
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

<div class="main-content container-fluid">
    <div class="col-12 d-flex justify-content-end">
    


    </div>

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">User Edit Form</h4>

                    </div>


                    <div class="card-content">
                        <div class="card-body">
                        <form action="edituseraction.php" method='POST'>

<div class="field">
    <label class="label_field">User Name</label>
    <input type="text" name="txtname" class="form-control"
        value="<?php echo $display['name']; ?>">
</div>

<div class="field">
    <label class="label_field">Phone</label>
    <input type="text" name="txtphone" class="form-control"
        value="<?php echo $display['phone']; ?>">
</div>

<div class="field">
<label class="label_field">Email</label>
    <input type="text" name="txtemail" class="form-control"
        value="<?php echo $display['email']; ?>">
    
</div>



<div class="field">
    <label class="label_field">Username</label>
    <input type="text" name="txtusername" class="form-control"
        value="<?php echo $display['username']; ?>">
</div>

<div class="field">
    <label class="label_field">Password</label>
    <input type="text" name="txtpassword" class="form-control"
        value="<?php echo $display['password']; ?>">
</div>







<div class="field margin_0 ml-5">
    <input type="hidden" name="user_id" value="<?php echo $id; ?>">
    <button class="btn btn-success" type='submit' name="btn-submit">Submit</button>
    <button class="btn btn-link" ><a href="index.php">Cancel</a></button>
</div>


</form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <?php
    include_once ('footer.php');
    ?>
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
