<?php
// session_start();
include_once ('header.php');
include_once("../dboperation.php");
$obj=new dboperation();
$college_id=$_SESSION["college_id"];
$sqlquery="select * from tbl_college_department cd inner join tbl_college c on c.college_id=cd.college_id inner join tbl_department d on cd.department_id=d.department_id inner join tbl_location l on c.location_id=l.location_id where cd.college_id='$college_id'";
$result=$obj->executequery($sqlquery);
?>
<script src="../jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function() {
    // alert("ajax applied");

    $("#college_department_id").change(function() {
        var college_department_id = $(this).val();
        $.ajax({
            type: "POST",
            url: "getfacdepartment.php",
            data: "college_department_id=" + college_department_id,
            success: function(data) {
                $("#divdepartment").html(data);
            }
        });
    });
});
</script>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-11 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mr-1 mb-3"    
                onclick='window.location.href="facultyreg.php"'>Add Faculty </button>
            </div>
          
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Faculty view</h4>
                        <p class="card-description">
                            <!-- Add class <code>.table</code> -->
                        </p>
                        <div class="row mb-3">
            <div class="col-md-6">
                <select class="form-control" name="college_department_id" id="college_department_id">
                    <option>Select department</option>
                    <?php
                                    while ($display = mysqli_fetch_array($result)) {
                                        ?>
                                     <option value="<?php echo $display["college_department_id"];?>"><?php echo $display["department_name"];?></option>
                                     <?php 
                                    }
                                    ?>
                </select>
            </div>
        </div>
                        <div class="table-responsive">
                            <table class="table"  id="divdepartment">
                                <thead>
                                    <tr>
                                        <th>Index</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>                                        
                                        <th>Location</th>                                       
                                        <th>Username</th>
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
                                            <td><?php echo $display["name"];?></td>
                                            <td><?php echo $display["email"];?></td>
                                            <td><?php echo $display["phone"];?></td>
                                            <td><?php echo $display["location"];?></td>                                                                                     
                                            <td><?php echo $display["username"];?></td>
                                            <td>
                                            <a href="editfaculty.php?faculty_id=<?php echo $display["faculty_id"];?>" onclick="return confirm('Are you sure want to edit?')"><button type="submit" class="btn btn-primary">Edit</button></a>
                                            </td>
                                            <td>
                                    <a href="deletefacaction.php?faculty_id=<?php echo $display["faculty_id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
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