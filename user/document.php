<?php
// session_start();
include_once('header.php');
include_once('../dboperation.php');
$obj = new dboperation();
$user_id = $_SESSION['user_id'];
$sql = "select * from tbl_access_info a inner join tbl_document d inner join tbl_subject s on d.subject=s.subject_id on a.document_id=d.document_id where a.user_id='$user_id'";
$res = $obj->executequery($sql);
?>
<div class="unit user-hyped" style="margin-top: 114px;">
  <h3 style="text-align: center;">Accessed Documents</h3>
  
  <div class="container">
    <div class="row">
      <?php
      while ($display = mysqli_fetch_array($res)) {
        ?>
        <div class="col-md-4">
          <div class="product-item bg-light mb-4 text-center" style="margin-top: 23px;">
            <div class="product-img position-relative overflow-hidden">
              <img src="images/pdf.jpg" alt="" style="height: 165px; margin-top: 15px;">
              <div class="product-action">
                <!-- <a class="btn btn-outline-dark btn-square"
                  href="buydoc.php?doc_id=<?php echo $display['document_id'] ?>"><i class="fa fa-shopping-cart"></i></a> -->
              </div>
            </div>
            <div class="py-4">
              <a class="h5 text-decoration-none text-truncate" href=""><?php echo $display['document_name']; ?></a>
              <div class="d-flex align-items-center justify-content-center mt-2">
                <h4><?php echo $display['category']; ?></h4>
                
              </div>
              <h5><?php echo $display['subject_name']; ?></h5>
              <h4 class="text-muted"> Coin: <?php echo $display['coin']; ?></h4>
              
            </div>
            <a href="../upload/document/<?php echo $display['document_name']; ?>.pdf" class="btn btn-primary">
    Download Document
</a>
          </div>
        </div>
        <?php
      }
      ?>
    </div> <!-- End row -->
  </div> <!-- End container -->
</div>
<?php
include_once('footer.php');
?>
