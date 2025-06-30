<?php
require_once("../dboperation.php");
$obj=new dboperation();
$district_id=$_POST["district_id"];
$sqlquery="select * from tbl_location l inner join tbl_district d on l.district_id=d.district_id  where l.district_id='$district_id'";
$result=$obj->executequery($sqlquery);
?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-11 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mr-1 mb-3"
                    onclick='window.location.href="location_reg.php"'>Add
                    New </button>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Location View</h4>
                        <p class="card-description">
                           
                        </p>
                        <div class="table-responsive">
                            <table class="table" id="divlocation">
                                <thead>
                                    <tr>
                                        <th>Index</th>
                                        <th>Location</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                        $i=1;
                        while($display=mysqli_fetch_array($result))
                        {
                            ?>

                                    <tr>
                                       
                                    <td><?php echo $i++; ?></td>
                          <td><?php echo $display["location_name"];?></td>
                          <td>
                        <a href="editlocation.php?location_id=<?php echo $display["location_id"];?>" onclick="return confirm('Are you sure want to edit?')">Edit</a>
                          </td>

                          <td>
                        <a href="deletelocation.php?location_id=<?php echo $display["location_id"];?>" onclick="return confirm('Are you sure want to delete?')">Delete</a>
                          </td>
                                    </tr>
                                    <?php
                        }
                        ?>
                                </tbody>
                            </table>
                      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once ('footer.php');
    ?>