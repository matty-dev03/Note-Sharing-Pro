<?php
include_once ('header.php');
require_once("../dboperation.php");
$obj=new dboperation();

$location_id=$_GET["location_id"];
$sqlquery="select * from tbl_location where location_id=$location_id";
$result=$obj->executequery($sqlquery);
$row=mysqli_fetch_array($result);
$sqlquery1="select * from tbl_district";
$result1=$obj->executequery($sqlquery1);
?>

<!-- partial -->
 
<div class="main-panel">


    <div class="content-wrapper">
        <div class="row">
            <div class="col-10 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mr-1 mb-3" onclick='window.location.href="viewlocation.php"'>View
                    Data </button>
            </div>

            <div class="col-md-10 grid-margin stretch-card  ">

                <div class="card">

                    <form action="locationeditaction.php" method="POST">
                        <div class="form-floating mb-3">
                        <h4 class="card-title" style="margin-left: 21px;">Location Edit</h4>
                        <p class="card-description" style="margin-left: 21px;">
                           Select the location of your college (under MGU)
                        </p>
                        <div class="form-group">
                        <select name="district_id" class="form-control" placeholder="District Name" style="margin-left: 21px;
    width: 490px;"required>
                               
                                <?php
                      while($display=mysqli_fetch_array($result1))
                      {
                          ?>
                                    <option value="<?php echo $display["district_id"];?>"<?php echo($display["district_id"]==$row["district_id"])?"selected=selected":"";?>><?php echo $display["district_name"];?></option>

                      <?php
                      }
                      ?> 
                                
                        </select>
                        <input type="hidden" name="location_id" value="<?php echo $row["location_id"];?>">
                            </div>
                            <div class="form-group">
                                <label for="inputLocation" style="margin-left: 21px;">Location</label>
                                <input type="text" class="form-control" id="location" style="margin-left: 21px;
    width: 490px;" name="location_name" value="<?php echo $row["location_name"];?>" placeholder="Location Name"required>
                            </div>
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