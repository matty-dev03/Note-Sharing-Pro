<?php

include_once ('header.php');
require_once("../dboperation.php");
$obj=new dboperation();
$college_id=$_GET["college_id"];
$sqlquery="select * from tbl_college where college_id=$college_id";
$result=$obj->executequery($sqlquery);
$row=mysqli_fetch_array($result);
?>

<div class="main-panel">


    <div class="content-wrapper">
        <div class="row">
            <div class="col-10 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mr-1 mb-3" onclick='window.location.href="viewcolleges.php"'>View
                    Data </button>
            </div>

              <div class="col-md-10 grid-margin stretch-card  ">

                    <div class="card">

                      <div class="card-body">
                      <form action="collegeeditaction.php" method="POST"  enctype="multipart/form-data">
                        <h4 class="card-title">College Edit</h4>
                        <p class="card-description">
                            College Details
                        </p>
                        <form class="forms-sample">
                        <input type="hidden" name="college_id" value="<?php echo $row["college_id"];?>" >

                            <div class="form-group">                            
                                <label for="collegename"> Name</label>
                                <input type="text" class="form-control" id="collegename" name="collegename"required
                                    placeholder="college name"  value="<?php echo $row["college_name"];?>">
                            </div>
                            <div class="form-group">
                         
                                <label for="college_phone_number"> Phone number</label>
                                <input type="text" class="form-control" id="collegename" name="college_phone_number"required
                                    placeholder="college_phone_number"  value="<?php echo $row["college_phone_number"];?>">
                            </div>
                            <div class="form-group">
                            
                                <label for="college_email">email</label>
                                <input type="text" class="form-control" id="collegename" name="college_email"required
                                    placeholder="college_email"  value="<?php echo $row["college_email"];?>">
                            </div>
                            <div class="form-group row">
                      <label for="exampleInputimg" class="col-sm-3 col-form-label">College Logo</label>
                      <div class="col-sm-9">
                      <img src="../upload/college/<?php echo $row["college_logo"];?>" width="60" height="60">
                        <input type="file" class="form-control" id="exampleInputimg" name="filephoto" placeholder="Photo" required>

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
                </div>
            </div>
        </div>
    </div>

  <?php
include_once("footer.php");
?>