<?php
include_once ('header.php');
require_once("../dboperation.php");
$obj=new dboperation();
$department_id=$_GET["department_id"];
$sqlquery="select * from tbl_department where department_id=$department_id";
$result=$obj->executequery($sqlquery);
$row=mysqli_fetch_array($result);
?>

<div class="main-panel">


    <div class="content-wrapper">
        <div class="row">
            <div class="col-10 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mr-1 mb-3" onclick='window.location.href="departmentview.php"'>View
                    Data </button>
            </div>

              <div class="col-md-10 grid-margin stretch-card  ">

                    <div class="card">

                      <div class="card-body">
                      <form action="departmenteditaction.php" method="POST"  enctype="multipart/form-data">
                        <h4 class="card-title">Department Edit</h4>
                        <p class="card-description">
                            Department Details
                        </p>
                        <form class="forms-sample">
                            <div class="form-group">
                            <input type="hidden" name="department_id" value="<?php echo $row["department_id"];?>" >
                                <label for="departmentname">Departement Name</label>
                                <input type="text" class="form-control" id="departmentname" name="departmentname"required
                                    placeholder="Departmentname"  value="<?php echo $row["department_name"];?>">
                            </div>
                            <div class="form-group row">
                      <label for="exampleInputimg" class="col-sm-3 col-form-label">Department Logo</label>
                      <div class="col-sm-9">
                      <img src="../upload/<?php echo $row["department_logo"];?>" width="60" height="60">
                        <input type="file" class="form-control" id="exampleInputimg" name="filephoto" placeholder="Photo"required >

                      </div>
                    </div>
                    </div>
                    </div>
</div>
                    <div>
                            <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <?php
include_once("footer.php");
?>