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

$sql1 = "select * from tbl_document where user_id='$id' and type='Faculty'";
$res1 = $obj->executequery($sql1);

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
html {
  font-family: "proxima-nova",sans-serif;
}

/* apply a natural box layout model to all elements */
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html, html a {
  -webkit-font-smoothing: antialiased !important;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
}

a {
  text-decoration: none;
  color: inherit;
}

/* ==== */
.site-header {
  height: 44px;
  width: 100%;
  border-bottom: 1px solid #E1e1e1;
}

.cover-photo {
  width: 980px;
  height: 250px;
  margin: 0 auto;
  background-color: #f5f5f5;
  position: relative;
  z-index: 1;
}

.body {
  width: 980px;
  margin: 0 auto;
  z-index: 4;
  position: relative;
}

.left-col, .right-col {
  width: 226px;
  float: left;
  min-height: 400px;
  position: relative;
}

.left-col {
  margin-right: 24px;
  position: relative;
  top: -150px;
  left: 8px;
}

.center-col {
  float: left;
  width: 480px;
  margin-right: 24px;
  min-height: 400px;
}

.right-col {
  background-color: blue;
}

/* LEFT COL */
.user-info h1 {
  font-size: 24px;
  font-weight: 600;
  line-height: 1.2;
  padding-top: 4px;
}
.user-info h2 {
  color: #666;
  font-size: 16px;
}
.user-info .meta {
  padding: 8px 0;
  font-size: 14px;
}
.user-info .meta p {
  line-height: 1.6;
}
.user-info .meta i {
  font-size: 0.95em;
  padding-right: 2px;
}

.profile-avatar {
  width: 218px;
  height: 218px;
  border: 1px solid #e1e1e1;
  background-color: #fff;
  right: 0;
}
.profile-avatar .inner {
  width: 206px;
  height: 206px;
  margin: 5px;
  background-image: url(../upload/<?php echo $dis['user_image']?>);
  background-size: cover;
}

/* CENTER */
.image-grid {
  width: 100%;
}
.image-grid li {
  float: left;
  background-color: #EFEFEF;
}
.image-grid.col-3 li {
  width: 32%;
  margin-right: 2%;
  margin-bottom: 2%;
  height: 0;
  padding-bottom: 30%;
  -webkit-background-size: 100%;
  background-size: 100%;
}
.image-grid.col-3 li:nth-child(3n) {
  margin-right: 0;
}

.profile-nav {
  height: 46px;
  background-color: white;
  border-bottom: 2px solid #E1E1E1;
  margin-bottom: 8px;
}
.profile-nav ul > li {
  color: #999;
  font-size: 14px;
  float: left;
  line-height: 44px;
  font-weight: 600;
  padding: 0 22px;
  cursor: pointer;
}
.profile-nav li.active {
  color: #1E1E1E;
}

.content .unit {
  padding: 8px 0 10px 0;
  border-bottom: 2px solid #E1E1E1;
  margin-bottom: 8px;
}
.content .unit:last-child {
  margin-bottom: 16px;
}
.content .unit h3 {
  margin-bottom: 4px;
  color: #777;
}
.content .unit h3 a {
  color: #1e1e1e;
  font-weight: 600;
}
.content .unit p.time {
  color: #777;
  font-size: 14px;
  margin-bottom: 8px;
}
.content .unit .more {
  font-size: 14px;
  color: #777;
}
.content .unit .more a {
  color: #777;
}
</style>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<header class="site-header"></header>
<div class="cover-photo"></div>
<div class="body">
<section class="left-col user-info">
  <div class="profile-avatar">
    <!-- <div class="inner" style="background-image: url('../upload/students/<?php echo $dis['user_image']; ?>'); background-size: cover;"></div>
  </div> -->
  <h1><?php echo $name; ?></h1>
  <h2>Teacher</h2>
  <class="meta">
      <p><i class="fa fa-fw fa-map-marker"></i> <?php echo $cname; ?></p>


      <!-- <button class="btn-primary outline"><a href="edituser.php?user_id=<?php echo $dis["faculty_id"]; ?>"
          onclick="return confirm('Are you sure want to edit?')">Edit</a></button> -->
          <button class="btn-info"><a href="document.php">Documents</a></button>
    </div>
</section>
<div>

    
    <!-- Wil hyped X-->
    <div class="unit user-hyped">
      <h3>Recently </a>Uploaded <a>Documents</a></h3>
      <!-- <p class="time"></p> -->
      <ul class="image-grid col-3">
        <?php
        while ($display = mysqli_fetch_array($res1)) {
          ?>
          <li>
            <div class="product-item bg-light mb-4">
              <div class="product-img position-relative overflow-hidden">
                <img src="images/pdf.jpg" alt="" style="height: 165px;margin-left: 88px; margin-top: 15px;">
                <div class="product-action">
                  <!-- <a class="btn btn-outline-dark btn-square"
                    href="buydoc.php?doc_id=<?php echo $display['document_id'] ?>"><i class="fa fa-shopping-cart"></i></a> -->
                </div>
              </div>
              <div class="text-center py-4" style="margin-top: 14px;">
                <a class="h6 text-decoration-none text-truncate" href=""><?php echo $display['document_name']; ?></a>
                <div class="d-flex align-items-center justify-content-center mt-2">
                  <h5><?php echo $display['category']; ?></h5>
                  <!-- <h6 class="text-muted ml-2"><del>$123.00</del></h6> -->
                </div>
               
              </div>
            </div>
          </li>
          <?php
        }
        ?>


      </ul>
     
    </div>



<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/67239/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="//use.typekit.net/psm0wvc.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>