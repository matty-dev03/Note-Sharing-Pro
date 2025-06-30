<?php
// session_start();
include_once('header.php');
include_once("../dboperation.php");

$obj = new dboperation();
$college_id = $_SESSION["college_id"];
$sqlquery = "SELECT * FROM tbl_college_department cd 
             INNER JOIN tbl_college c ON c.college_id = cd.college_id 
             INNER JOIN tbl_department d ON cd.department_id = d.department_id 
             WHERE cd.college_id = '$college_id'";
$result = $obj->executequery($sqlquery);
?>

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row mb-4">
            <div class="col-md-9">
                <h1 class="fw-bold py-3">College Department</h1>
            </div>
            <!-- Uncomment and modify if needed -->
            <!-- <div class="col-lg-3 d-flex justify-content-end">
                <button type="button" class="btn btn-primary" onclick="window.location.href='location_reg.php'">Registration</button>
            </div> -->
        </div>
        <div class="col-11 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mr-1 mb-5"
                    onclick='window.location.href="college_dprt.php"'>Add
                    New </button>
            </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    
                    <table class="table table-bordered table-striped" id="divlocation">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Department Name</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            while ($display = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo htmlspecialchars($display["department_name"]); ?></td>
                               
                                <td>
                                    <a href="deletedprtaction.php?college_department_id=<?php echo $display["college_department_id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
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
