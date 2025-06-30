<?php
include_once ('header.php');
include_once("../dboperation.php");
$obj=new dboperation();
$sqlquery="select * from tbl_college c inner join tbl_location l on c.location_id=l.location_id inner join tbl_district d on c.district_id= d.district_id ";
$result=$obj->executequery($sqlquery);
?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-11 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mr-1 mb-3"
                    onclick='window.location.href="college_registration.php"'>Add
                    New </button>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">College Result</h4>
                        <p class="card-description">
                            <!-- Add class <code>.table</code> -->
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Index</th>
                                        <th>College name</th>
                                        <th>District</th>
                                        <th>Location</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Registration Date</th>
                                        <th>College Username</th>
                                        <th>Logo</th>
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
                                            <td><?php echo $display["college_name"];?></td>
                                            <td><?php echo $display["district_name"];?></td>
                                            <td><?php echo $display["location_name"];?></td>
                                            <td><?php echo $display["college_email"];?></td>
                                            <td><?php echo $display["college_phone_number"];?></td>
                                            <td><?php echo $display["reg_date"];?></td>
                                            <td><?php echo $display["college_username"];?></td>
                                            <td><img src="../upload/college/<?php echo $display["college_logo"];?>" width="60" height="60"></td>
                                            <td>
                                             <a href="editcollege.php?college_id=<?php echo $display["college_id"];?>" onclick="return confirm('Are you sure want to edit?')">Edit</a>
                                            </td>

                                            <td>
                                             <a href="deletecollege.php?college_id=<?php echo $display["college_id"];?>" onclick="return confirm('Are you sure want to delete?')">Delete</a>
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