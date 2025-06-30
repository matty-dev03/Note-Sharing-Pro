<?php
include_once('header.php');
include_once("../dboperation.php");
$obj = new dboperation();
$sqlquery = "select * from tbl_department";
$result = $obj->executequery($sqlquery);
?>
<script src="../jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function() {
    // alert("ajax applied");

    $("#department_id").change(function() {
        var department_id = $(this).val();
        $.ajax({
            type: "POST",
            url: "getcourse.php",
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
                <h4 class="fw-bold py-3"><span class="text-muted fw-light"></span> Course View</h4>
            </div>
            <!-- <div class="col-lg-3 d-flex justify-content-end">
                <button type="button" class="btn btn-primary" onclick="window.location.href='course_reg.php'">Registration</button>
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
                      <option value="<?php echo $display["department_id"];?>"><?php echo $display["department_name"];?></option>
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
                                <th>Sem Count</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <!-- Data will be populated here via AJAX -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include_once('footer.php');
?>