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
            <div class="col-11 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mr-1 mb-3"
                    onclick='window.location.href="department_reg.php"'>Add
                    New </button>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Department View</h4>
                        <p class="card-description">
                            <!-- Add class <code>.table</code> -->
                        </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Index</th>
                                        <th>Departement name</th>
                                        <th>Department image</th>
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
                                            <td><?php echo $display["department_name"];?></td>
                                            <td><img src="../upload/<?php echo $display["department_logo"];?>" width="60" height="60"></td>
                                            <td>
                                             <a href="editdepartment.php?department_id=<?php echo $display["department_id"];?>" onclick="return confirm('Are you sure want to Edit?')">Edit</a>
                                            </td>
                                            <td>
                                             <a href="deletedepartment.php?department_id=<?php echo $display["department_id"];?>" onclick="return confirm('Are you sure want to delete?')">Delete</a>
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