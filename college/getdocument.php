<?php
require_once("../dboperation.php");
$obj=new dboperation();
$subject_id=$_POST["subject_id"];
 $sqlquery="select * from tbl_document l inner join tbl_subject d on l.subject_id=d.subject_id  where l.subject_id='$subject_id'";
$result=$obj->executequery($sqlquery);
?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
                    
                        <div class="table-responsive">
                        <table class="table card-table" id="divdocument">
                                    <thead>
                                        <tr>
                                            <th>Sl.No</th>
                                            <th>User Name</th>
                                            <th>Category Name</th>
                                            <th>Subject Name</th>
                                            <th>Document Name</th>
                                            <th>Uploaded Date</th>
                                            <th>Reject</th>
                                            <th>Accept</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        while ($display = mysqli_fetch_array($result)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $display["document_name"]; ?></td>
                                                <td><?php echo $display["category"]; ?></td>
                                                <td><?php echo $display["subject_name"]; ?></td>
                                                <td><a href="../upload/document/<?php echo $display["document"]; ?>" target_blank>View</a></td>

                                                <td><?php echo $display["upload_date"]; ?></td>
                                                <td>
                                            <!-- Popup Trigger Button -->
                                            <button type="button" class="open-button"
                                                data-popup="popup-<?php echo $i; ?>">Reject</button>
                                            <div class="popup" data-popup="popup-<?php echo $i; ?>">
                                                <div class="popup-content">
                                                    <form action="reject.php" method="POST">
                                                        <label for="remark">Remark</label>
                                                        <input type="text" name="Remark" id="remark">
                                                        <input type="hidden" name="document_id"
                                                            value="<?php echo $display["document_id"]; ?>">
                                                        <button type="submit" name="btnsubmit"
                                                            class="open-button">Submit</button>
                                                    
                                           </td>
                                           <td>
                                            <!-- Popup Trigger Button -->
                                            <button type="button" class="open-button"
                                                data-popup="popup-<?php echo $i; ?>">Accept</button>
                                            <div class="popup" data-popup="popup-<?php echo $i; ?>">
                                                <div class="popup-content">
                                                    <form action="coinallocaction.php" method="POST">
                                                        <label for="coin">Coin</label>
                                                        <input type="text" name="coin" id="coin">
                                                        <input type="hidden" name="document_id"
                                                            value="<?php echo $display["document_id"]; ?>">
                                                        <button type="submit" name="btnsubmit"
                                                            class="open-button">Submit</button>
                                                    
                                           </td>
                                        </tr>
                                        </form>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                      
                        </div>
                    
                
            
        </div>
    </div>

    <!-- <?php
    //include_once ('footer.php');
    ?> -->
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