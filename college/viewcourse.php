<?php
// session_start();
include_once('header.php');
include_once("../dboperation.php");
$obj = new dboperation();
 $college_id = $_SESSION["college_id"];
$sqlquery="select * from tbl_college_department cd inner join tbl_college c on c.college_id=cd.college_id inner join tbl_department d on cd.department_id=d.department_id where cd.college_id='$college_id'";
$result = $obj->executequery($sqlquery);
?>
<script src="../jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function() {
    // alert("ajax applied");

    $("#department_id").change(function() {
        var department_id = $(this).val();
        // alert(department_id)
        $.ajax({
            type: "POST",
            url: "getcourseview.php",
            data: { department_id: department_id },
            success: function(data) {
                $("#divcourse").html(data);
            }
        });
    });
});
</script>

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row mb-4">
            <div class="col-md-9">
                <h1 class="fw-bold py-3"><span class="text-muted fw-light"></span> College Department </h1>
            </div>
            <!-- <div class="col-lg-3 d-flex justify-content-end">
                <button type="button" class="btn btn-primary" onclick="window.location.href='location_reg.php'">Registration</button>
            </div> -->
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <select class="form-control" name="department_id" id="department_id">
                    <option>..Choose Department...</option>
                <?php
                      while($display=mysqli_fetch_array($result))
                      {
                      ?>
                      <option value="<?php echo $display["college_department_id"];?>"><?php echo $display["department_name"];?></option>
                      <?php
                      }
                      ?> 
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table card-table" id="divcourse">
                        <thead>
                            <tr>
                                <th>#</th>
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
                                            <td><?php echo $display["College_name"];?></td>
                                            
                                            <!-- <td><a href="editcollegecourse.php?college_course_id=<?php echo $display["college_course_id"];?>" onclick="return confirm('Are you sure want to edit?')">Edit</a>
                                            </td> -->

                                            <td>
                                             <a href="deletedcourse.php?college_course_id=<?php echo $display["college_course_id"];?>" onclick="return confirm('Are you sure want to delete?')">Delete</a>
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

<?php
 include_once ('footer.php');
?>