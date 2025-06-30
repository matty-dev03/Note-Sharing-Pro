<?php
include_once("header.php");
include_once("../dboperation.php");
$obj = new dboperation();
$id = $_SESSION['user_id'];

// Fetch the student details
$sqlquery = "SELECT * FROM tbl_student s  WHERE s.user_id='$id'";
$result = $obj->executequery($sqlquery);
$dis = mysqli_fetch_array($result);

// Fetch the college details using the college_id from the student details
$college_id = $dis["college_id"];
$college_query = "SELECT college_name FROM tbl_college WHERE college_id='$college_id'";
$college_result = $obj->executequery($college_query);
$college_dis = mysqli_fetch_array($college_result);

// Get student name and college name
$name = $dis["name"];
$img = $dis["user_image"];
$cname = $college_dis["college_name"];

// Display documents uploaded by student
echo $sql1 = "select * from tbl_document where user_id='$id' and type='Student'";
$res1 = $obj->executequery($sql1);
?>

<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="assets/css/main.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<style>
  body {
    font-family: "Poppins", sans-serif;
    background-color: #f9f9f9;
  }

  .profile-header {
    text-align: center;
    margin-top: 30px;
  }

  .profile-header h1 {
    font-size: 32px;
    font-weight: bold;
  }

  .profile-header h2 {
    font-size: 18px;
    color: #666;
  }
  .profile-header h3 {
    font-size: 15px;
    color: #666;
  }
  .btn-container {
    display: flex;
    justify-content: center;
    margin-top: 15px;
  }

  .btn-container a {
    margin: 0 5px;
    padding: 10px 20px;
    font-size: 16px;
  }

  .document-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 40px;
  }
  body {
  padding-top: 80px; /* Adjust this value if the header height changes */
}

.header {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
}

  .document-card {
    width: 280px;
    margin: 10px;
    padding: 15px;
    background: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    text-align: center;
  }

  .document-card img {
    width: 100px;
    margin-bottom: 10px;
  }

  .document-card h6 {
    font-size: 18px;
    font-weight: 600;
    color: #333;
  }

  .document-card p {
    font-size: 14px;
    color: #555;
    margin: 0;
  }

  .document-card .coin-info {
    margin-top: 8px;
    color: #777;
  }
</style>

<div class="profile-header">
  <h1><?php echo $name; ?></h1>
  <h2><?php echo $cname; ?></h2>
  <h3>Student</h3>
  <div class="btn-container">
    <a href="edituser.php?user_id=<?php echo $dis['user_id']; ?>" onclick="return confirm('Are you sure want to edit?')" class="btn btn-primary">EDIT</a>
    <a href="document.php" class="btn btn-info">DOCUMENTS</a>
  </div>
</div>

<div class="document-grid">
  <?php while ($display = mysqli_fetch_array($res1)) { ?>
    <div class="document-card">
      <img src="images/pdf.jpg" alt="PDF">
      <h6><?php echo $display['document_name']; ?></h6>
      <p>Category: <?php echo $display['category']; ?></p>
      <p class="coin-info">
  <?php 
    if ($display['status'] == "Rejected") {
        // Display message when status is Rejected
        echo "Status: Rejected<br>";
        echo "Remark: " . $display['remark'] . "<br>";
      
    } else {
        // Check if coin is NULL
        echo ($display['coin'] == 0) ? "Document Not Verified" : "Coin: " . $display['coin'];
    }
  ?>
</p>
    </div>
  <?php } ?>
</div>

    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/67239/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="//use.typekit.net/psm0wvc.js"></script>
    <script type="text/javascript">try { Typekit.load(); } catch (e) { }</script>