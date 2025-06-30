<?php
include_once('header.php');
include_once("../dboperation.php");
$obj = new dboperation();
$sqlquery1 = "select * from tbl_subject";
$result1 = $obj->executequery($sqlquery1);
$sql = "SELECT * FROM tbl_document d INNER JOIN tbl_student s ON d.user_id=s.user_id INNER JOIN tbl_subject sb ON d.subject_id=sb.subject_id where d.status='Accept' and d.coin=0";
$result = $obj->executequery($sql);
?>
<script src="../jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function()

{
//   alert("ajax applied");

  $("#subject_id").change(function()
{
     var subject_id=$(this).val();
	
		$.ajax({
			type: "POST",
			url: "getdocument.php",
			data: "subject_id="+subject_id,
			
			success: function(data){
				$("#divdocument").html(data);
			}
		});
  });
	});
 </script>
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
            <form method="POST" action="coinallocationaction.php">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Note Verification</h4>
                            <!-- <p class="card-description">Add class <code>.table</code></p> -->
                            <div class="table-responsive">
                            <div class="row mb-3">
            <div class="col-md-6">
                <select class="form-control" name="subject_id" id="subject_id">
                                    <option>Select Subject</option>
                                    <?php
                                    while ($display = mysqli_fetch_array($result1)) {
                                        ?>
                                     <option value="<?php echo $display["subject_id"];?>"><?php echo $display["subject_name"];?></option>
                                     <?php 
                                    }
                                    ?>
                </select>
            </div>
       
                            <table class="table card-table" id="divdocument">
                                    <thead>
                                        <tr>
                                            <th>Sl.No</th>
                                            <th>User Name</th>
                                            <th>Category Name</th>
                                            <th>Subject Name</th>
                                            <th>Document Name</th>
                                            <th>Uploaded Date</th>
                                            <th>Coin</th>
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
                                                <td><?php echo $display["upload_date"]; ?></td>
                                                <td><input type="text" name="coin"></td>
                                                <td>
                                                    <input type="hidden" name="documentid" value="<?php echo $display["document_id"] ?>">
                                                    <!-- Popup Trigger Button -->
                                                    <button type="submit" class="btn btn-primary">Action</button>
                                                    <!-- <a href="docaccept.php?document_id=<?php echo $display["document_id"] ?>"
                                                class="btn-success">Accept</a> -->
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
            </form>
        </div>
    </div>

    <!-- <?php
    //include_once('footer.php');
    ?> --> 