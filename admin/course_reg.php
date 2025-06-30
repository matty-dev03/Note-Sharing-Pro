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
                <button type="submit" class="btn btn-primary mr-1 mb-3" onclick='window.location.href="viewcourse.php"'>View
                    Data </button>
            </div>

              <div class="col-md-10 grid-margin stretch-card  ">

                    <div class="card">

                      <div class="card-body">
                      <form action="courseaction.php" method="POST" >
                        <h4 class="card-title">Course Registration</h4>
                        <p class="card-description">
                            Course Details
                        </p>
                        <form class="forms-sample">
                        <div  class="form-group">
                            <label for="exampledepartmentname">Department Name</label>
                             <select id="department_id" name="department_id" class="form-control" required>
                                <option>Select department</option> 
                                <?php
                                 while($display=mysqli_fetch_array($result))
                                {
                                ?>
                                <option value="<?php echo $display["department_id"];?>"><?php echo $display["department_name"];?></option>
                                <?php
                                }
                                ?> 
                                            
                              </select>
                             </div>
                            <div class="form-group">
                                <label for="coursename">Course Name</label>
                                <input type="text" class="form-control" id="coursename" name="coursename"
                                    placeholder="coursename" required>
                            </div>
                            <div class="form-group">
                                <label for="semcount">Sem count</label>
                                <input type="number" class="form-control" id="semcount" name="semcount"
                                    placeholder="semcount"  
                                    title="Enter the sem count" required>
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
    include_once ('footer.php');
    ?>