<?php
// session_start();
include_once('header.php');
include_once("../dboperation.php");
$obj = new dboperation();
$college_id=$_SESSION['college_id'];
$sql = "SELECT * FROM tbl_document d 
INNER JOIN tbl_student s ON d.user_id = s.user_id 
INNER JOIN tbl_subject sb ON d.subject = sb.subject_id 
INNER JOIN tbl_college c ON c.college_id = s.college_id 
WHERE d.status='uploaded'
AND s.college_id = '$college_id'";
$result = $obj->executequery($sql);
?>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    p {
        font-size: 16px;
        line-height: 26px;
        letter-spacing: 0.5px;
        color: #484848;
    }

    .open-button {
        color: #FFF;
        background: #0066CC;
        padding: 10px;
        text-decoration: none;
        border: 1px solid #0157ad;
        border-radius: 3px;
    }

    .open-button:hover {
        background: #01478e;
    }

    .popup {
        position: fixed;
        top: 0px;
        left: 0px;
        background: rgba(0, 0, 0, 0.75);
        width: 100%;
        height: 100%;
        display: none;
    }

    .popup-content {
        width: 700px;
        margin: 0 auto;
        box-sizing: border-box;
        padding: 40px;
        margin-top: 100px;
        box-shadow: 0px 2px 6px rgba(0, 0, 0, 1);
        border-radius: 3px;
        background: #fff;
        position: relative;
    }

    .close-button {
        width: 25px;
        height: 25px;
        position: absolute;
        top: -10px;
        right: -10px;
        border-radius: 20px;
        background: rgba(0, 0, 0, 0.8);
        font-size: 20px;
        text-align: center;
        color: #fff;
        text-decoration: none;
    }

    .close-button:hover {
        background: rgba(0, 0, 0, 1);
    }

    @media screen and (max-width: 720px) {
        .popup-content {
            width: 90%;
        }
    }
</style>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-11 d-flex justify-content-end">
                <button type="button" class="btn btn-primary mr-1 mb-3"
                    onclick='window.location.href="coinallocation.php"'>Assign coin</button>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Note Verification</h4>
                        <!-- <p class="card-description">Add class <code>.table</code></p> -->
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>User Name</th>
                                        <th>Category Name</th>
                                        <th>Subject Name</th>
                                        <th>Document Name</th>
                                        <th>Documents</th>
                                        <th>Uploaded Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while ($display = mysqli_fetch_array($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $display["name"]; ?></td>
                                        <td><?php echo $display["category"]; ?></td>
                                        <td><?php echo $display["subject_name"]; ?></td>
                                        <td><?php echo $display["document_name"]; ?></td>
                                        <td><a href="../upload/document/<?php echo $display["document"]; ?>"
                                        target_blank>View</a></td>
                                        <td><?php echo $display["upload_date"]; ?></td>

                                        <td>
                                            <!-- Popup Trigger Button -->
                                            <button type="button" class="open-button" data-popup="popup-<?php echo $i; ?>" style="background-color: #FFA07A; border-color: #FFA07A; color: #FFFFFF; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Reject</button>

<div class="popup" data-popup="popup-<?php echo $i; ?>">
<div class="popup-content">
<form action="docreject.php" method="POST">
<label for="remark">Remark</label>
<input type="text" name="Remark" id="remark">
<input type="hidden" name="document_id" value="<?php echo $display["document_id"]; ?>">
<button type="submit" name="btnsubmit" class="open-button" style="background-color: #FFA07A; border-color: #FFA07A; color: #FFFFFF; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Submit</button>
</form>
<a class="close-button" data-popup-close="popup-<?php echo $i; ?>" href="javascript:void(0)" style="color: #FFFFFF; font-size: 20px; font-weight: bold;">x</a>
</div>
</div>

<button type="button" class="open-button" style="background-color: #2ecc71; border-color: #2ecc71; color: #FFFFFF; padding: 10px 20px; border-radius: 5px; cursor: pointer;" onclick="location.href='docaccept.php?document_id=<?php echo $display["document_id"]; ?>'">Accept</button></td.
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
    include_once('footer.php');
    ?>

    <script src="jquery-3.7.1.min.js"></script>
    <script>
        $(function () {
            // Open Popup
            $('.open-button').on('click', function () {
                var popup_name = $(this).data('popup');
                $('[data-popup="' + popup_name + '"]').fadeIn(300);
            });

            // Close Popup
            $('.close-button').on('click', function () {
                var popup_name = $(this).data('popup-close');
                $('[data-popup="' + popup_name + '"]').fadeOut(300);
            });
        });
    </script>
</div>
