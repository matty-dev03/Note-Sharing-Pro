<?php
include_once("header.php");
include_once("../dboperation.php");
$obj = new dboperation();
$college_id=$_SESSION['college_id'];
$sqlquery = "select * from tbl_college_course cc inner join tbl_course c on c.course_id=cc.course_id where cc.college_id='$college_id'";
$result = $obj->executequery($sqlquery);
?>
<script src="../jquery-3.7.1.min.js"></script>
<!-- <script>
    $(document).ready(function () {
        $("#course_id").change(function () {
            var course_id = $(this).val();
            
            $.ajax({
                url: "getcourse.php",
                method: "POST",
                data: {
                    course_id: course_id
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
</script> -->

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
                  <p class="mb-4 text-center">Register Subject For Courses</p>
                  <form action="collegesubjectaction.php" method="post">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group first">
                          <select class="form-control" id="course_id" name="course"required>
                            <option>..Choose Course...</option>
                            <?php
                            while ($display = mysqli_fetch_array($result)) {
                            ?>
                            <option  value="<?php echo $display["course_id"]; ?>"><?php echo $display["course_name"]; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div id="chk">
                      <label>Subjects:</label>
                      <input type="text"  name="subject"required>
                      <label for="subject"></label>
                      <label>Semesters:</label>
                      <input type="number" name="sem" id="numberInput" style="padding: 5px; font-size: 16px; transition: width 0.3s ease; box-sizing: content-box;" oninput="this.style.width = (this.value.length + 1) + 'ch';" placeholder="Semester count"required >
                    </div>
                    <br>
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
