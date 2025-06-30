<?php
include_once ('header.php');
require_once("../dboperation.php");
$obj=new dboperation();
$course_id=$_GET["course_id"];
$sqlquery="select * from tbl_course where course_id=$course_id";
$result=$obj->executequery($sqlquery);
$row=mysqli_fetch_array($result);
$sqlquery1="select * from tbl_department";
$row1=$obj->executequery($sqlquery1);
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

                    <form action="editcourseaction.php" method="POST">
                        <div class="form-floating mb-3">
                        <h4 class="card-title" style="margin-left: 21px;">course Edit</h4>
                        <p class="card-description" style="margin-left: 21px;">
                           Select the course of your college (under MGU)
                        </p>
                        <div class="form-group">
                        <select name="department_id" class="form-control" placeholder="Department Name" style="margin-left: 21px;width: 490px;">
                               
                                <?php
                      while($display=mysqli_fetch_array($row1))
                      {
                          ?>
                                    <option value="<?php echo $display["department_id"];?>"<?php echo($display["department_id"]==$row["department_id"])?"selected=selected":"";?>><?php echo $display["department_name"];?></option>

                      <?php
                      }
                      ?> 
                                
                        </select>
                        <input type="hidden" name="course_id" value="<?php echo $row["course_id"];?>">
                            </div>
                            <div class="form-group">
                                <label for="inputcourse" style="margin-left: 21px;">course</label>
                                <input type="text" class="form-control" id="course" style="margin-left: 21px;
                                width: 490px;" name="course_name" value="<?php echo $row["course_name"];?>"
                                 placeholder="course Name"required>
                            </div>

                            
                            <div class="form-group">
                                <label for="inputcourse" style="margin-left: 21px;">course</label>
                                <input type="number" class="form-control" id="semcount" style="margin-left: 21px;
                                width: 490px;" name="sem_count" value="<?php echo $row["sem_count"];?>"
                                 placeholder="sem count"required>
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