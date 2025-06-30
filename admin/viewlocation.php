<?php
include_once('header.php');
include_once("../dboperation.php");
$obj = new dboperation();
$sqlquery = "select * from tbl_district";
$result = $obj->executequery($sqlquery);
?>
<script src="../jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function () {
        // alert("ajax applied");

        $("#district_id").change(function () {
            var district_id = $(this).val();
            $.ajax({
                type: "POST",
                url: "getlocation.php",
                data: "district_id=" + district_id,
                success: function (data) {
                    $("#divlocation").html(data);
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
                <h4 class="fw-bold py-3"><span class="text-muted fw-light"></span> LOCATION VIEW</h4>
            </div>
            <!-- <div class="col-lg-3 d-flex justify-content-end">
                <button type="button" class="btn btn-primary" onclick="window.location.href='location_reg.php'">Registration</button>
            </div> -->
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <select class="form-control" name="district_id" id="district_id">
                    <option>Select district</option>
                    <?php
                    while ($display = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $display["district_id"]; ?>"><?php echo $display["district_name"]; ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table card-table" id="divlocation">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>LOCATION NAME</th>
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