<?php
include_once("header.php");
include_once("../dboperation.php");
$obj = new dboperation();
$id = $_SESSION['user_id']; // Ensure that the session variable is set

// Fetch the student details
$sqlquery = "SELECT * FROM tbl_faculty WHERE faculty_id='$id'";
$result = $obj->executequery($sqlquery);
$dis = mysqli_fetch_array($result);

// Fetch the college details using the college_id from the faculty details
$college_id = $dis["college_id"];
$college_query = "SELECT college_name FROM tbl_college WHERE college_id='$college_id'";
$college_result = $obj->executequery($college_query);
$college_dis = mysqli_fetch_array($college_result);

// Get faculty name and college name
$name = $dis["name"];
$cname = $college_dis["college_name"];

$sql1 = "select * from tbl_document d inner join tbl_subject s on d.subject=s.subject_id where user_id='$id' and type='Faculty'";
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
  <h3>Teacher</h3>
  <div class="btn-container">
     <a href="document.php" class="btn btn-info">DOCUMENTS</a>
  </div>
</div>

<div class="document-grid">
  <?php while ($display = mysqli_fetch_array($res1)) { ?>
    <div class="document-card">
      <img src="images/pdf.jpg" alt="PDF">
      <h6><?php echo $display['document_name']; ?></h6>
      <h6><?php echo $display['subject_name']; ?></h6>
      <p>Category: <?php echo $display['category']; ?></p>
    </div>
  <?php } ?>
</div>

    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/67239/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="//use.typekit.net/psm0wvc.js"></script>
    <script type="text/javascript">try { Typekit.load(); } catch (e) { }</script>