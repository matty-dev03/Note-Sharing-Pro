<?php
include_once("header.php");
include_once("../dboperation.php");
$obj = new dboperation();
$sqlquery = "select DISTINCT * from tbl_department";
$result = $obj->executequery($sqlquery);
?>
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

    <title>Register Your Department</title>
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
                <h3 class="card-title text-center">Register Your Department</h3>
                <form action="collegedepartmentaction.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12">
                    <?php
                    while($display = mysqli_fetch_array($result)) {
                    ?>
                      <div class="form-group form-check">
                        <input class="form-check-input" type="checkbox" name="department[]" value="<?php echo $display["department_id"]; ?>" id="department_<?php echo $display["department_id"]; ?>">
                        <label class="form-check-label" for="department_<?php echo $display["department_id"]; ?>">
                            <?php echo $display["department_name"]; ?>
                        </label>
                      </div>  
                      <?php
                    }
                    ?>  
                    </div> 
                  </div>
                  <div class="form-group text-center">
                    <input type="submit" value="Register" class="btn px-5 btn-primary">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
    <script src="clgdepartment/js/jquery-3.3.1.min.js"></script>
    <script src="clgdepartment/js/popper.min.js"></script>
    <script src="clgdepartment/js/bootstrap.min.js"></script>
    <script src="clgdepartment/js/main.js"></script>
  </body>
</html>
<?php
 include_once("footer.php");
?>
