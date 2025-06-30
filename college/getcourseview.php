<?php
session_start();
$collegeid=$_SESSION['college_id'];
require_once("../dboperation.php");
 $obj=new dboperation();
 $department_id=$_POST["department_id"];
 $sqlquery="select * from tbl_college_course l inner join tbl_course d on l.course_id=d.course_id  where l.college_department_id='$department_id' and l.college_id='$collegeid'";
$result=$obj->executequery($sqlquery);
?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-11 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mr-1 mb-3"
                    onclick='window.location.href="collegecourse.php"'>Add New </button>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Course View</h4>
                        <p class="card-description">
                           
                        </p>
                        <div class="table-responsive">
                            <table class="table" id="divcourse">
                                <thead>
                                    <tr>
                                        <th>Index</th>
                                        <th>Course Name</th>
                                        <!-- <th>Edit</th> -->
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
                          <td><?php echo $display["course_name"];?></td>
                                             
                          <!-- <td>
                        <a href="editcourse.php?course_id=<?php echo $display["course_id"];?>" onclick="return confirm('Are you sure want to edit?')">Edit</a>
                          </td> -->

                          <td>
                        <a href="deletecourse.php?college_course_id=<?php echo $display["college_course_id"];?>" onclick="return confirm('Are you sure want to delete?')">Delete</a>
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