<?php
include_once("header.php");
include_once("../dboperation.php");
$obj = new dboperation();
$college_id=$_SESSION['college_id'];
$sqlquery = "select DISTINCT * from tbl_college_department cd inner join tbl_department d on cd.department_id=d.department_id where college_id='$college_id'";
$result = $obj->executequery($sqlquery);
?>
<script src="../jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function () {
        $("#department_id").change(function () {
            var department_id = $(this).val();
            
            $.ajax({
                url: "getcourse.php",
                method: "POST",
                data: {
                  college_department_id: department_id
                },
                success: function (response) {
                    $("#chk").html(response);
                },
                error: function () {
                    $("#chk").html("Error occurred while getting employeelist!");
                }
            });
        });
    });
</script>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="clgdepartment/fonts/icomoon/style.css">

    <link rel="stylesheet" href="clgdepartment/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="clgdepartment/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="clgdepartment/css/style.css">

    <title>Register</title>
  </head>
  <body>
    <div class="d-lg-flex half">
      <div class="bg order-1 order-md-2" style="background-image: url('clgdepartment/images/bg_1.jpg');"></div>
      <div class="contents order-2 order-md-1">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 py-5">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title text-center">Register</h3>
                  <p class="mb-4 text-center">College Course Registration</p>
                  <form action="collegecourseaction.php" method="post">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group first">
                          <label for="email">College Department</label>
                          <select class="form-control" id="department_id" name="college_department_id"required>
                            <option>..Choose Department...</option>
                            <?php
                            while ($display = mysqli_fetch_array($result)) {
                            ?>
                            <option value="<?php echo $display["college_department_id"]; ?>"><?php echo $display["department_name"]; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <label>Courses:</label>
                    <div id="chk">
                      <input type="checkbox" name="course[]"required>
                      <label for="course1"></label>
                    </div>
                    <input type="submit" value="Register" class="btn px-5 btn-primary">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="clgdepartment/js/popper.min.js"></script>
    <script src="clgdepartment/js/bootstrap.min.js"></script>
    <script src="clgdepartment/js/main.js"></script>
  </body>
</html>
