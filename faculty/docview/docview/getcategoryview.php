<?php
include_once('../dboperation.php');
$obj = new dboperation();
$category = $_POST['category'];
$sql = "select * from tbl_document d inner join tbl_subject s on d.subject=s.subject_id where d.category='$category' and d.status='Accept'";
$res = $obj->executequery($sql);
while ($disp = mysqli_fetch_array($res)) {
    ?>
    <div class="col-lg-4 col-md-6 col-sm-6 pb-1" >
<div class="product-item bg-light mb-4">
    <div class="product-img position-relative overflow-hidden">
        <img class="img-fluid w-100" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/PDF_file_icon.svg/400px-PDF_file_icon.svg.png?20220802235851" alt="">
        <div class="product-action">
            <a class="btn btn-outline-dark btn-square" href=""><i
                    class="fa fa-shopping-cart"></i></a>
        </div>
    </div>
    <div class="text-center py-4">
        <a class="h6 text-decoration-none text-truncate"
            href=""><?php echo $disp['document_name']; ?></a>
        <div class="d-flex align-items-center justify-content-center mt-2">
            <h5><?php echo $disp['category']; ?></h5>
            <br>
            <h6 class="text-muted ml-2"> Coin : <?php echo $disp['coin']; ?></h6> 
            <!-- <h6 class="text-muted ml-2"><del>$123.00</del></h6> -->
        </div>

    </div>
</div>
</div>
    <?php
}
?>