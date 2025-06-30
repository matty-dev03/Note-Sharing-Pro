<?php
include_once ('header.php');
include_once("../dboperation.php");
$obj=new dboperation();
$sqlquery="select * from tbl_department";
$result=$obj->executequery($sqlquery);
?>
<!-- partial -->
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
                      <form action="departmentaction.php" method="POST"  enctype="multipart/form-data">
                        <h4 class="card-title">Department Registration</h4>
                        <p class="card-description">
                            Department Details
                        </p>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="departmentname">Department Name</label>
                                <input type="text" class="form-control" id="departmentname" name="departmentname"
                                    placeholder="Departmentname">
                            </div>
                            <div class="form-group row">
                      <label for="exampleInputimg" class="col-sm-3 col-form-label">Department Logo</label>
                      <div class="col-sm-9">
                        <input type="file" class="form-control" id="exampleInputimg" name="filephoto" placeholder="Photo">
                      </div>
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
                </di>
            </div>
        </div>
    </div>


    <?php
    include_once ('footer.php');
    ?>