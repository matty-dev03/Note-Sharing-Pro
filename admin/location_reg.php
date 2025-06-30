<?php
include_once('header.php');
require_once("../dboperation.php");
$obj = new dboperation();
$sqlquery = "select * from tbl_district";
$result = $obj->executequery($sqlquery);
?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-10 d-flex justify-content-end mb-3">
                <button type="button" class="btn btn-primary" onclick='window.location.href="viewlocation.php"'>View Data</button>
            </div>
            <div class="col-md-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Location Entry</h4>
                        <p class="card-description">Select the location of your college (under MGU)</p>
                        <form action="locationaction.php" method="POST">
                            <div class="form-group">
                                <label for="district_id">Select District</label>
                                <select class="form-control" id="district_id" name="district_id"required>
                                    <option>Select district</option>
                                    <?php
                                    while ($display = mysqli_fetch_array($result)) {
                                        ?>
                                     <option value="<?php echo $display["district_id"];?>"><?php echo $display["district_name"];?></option>
                                     <?php 
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" id="location" name="location" placeholder="Location"required>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                            <button type="button" class="btn btn-light" onclick='window.location.href="index.php"'>Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once('blankfooter.php');
?>
