<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("location:../Guest/login.php");
}
include_once("../dboperation.php");
$obj=new dboperation();
$id = $_SESSION['user_id'];
$sqlquery = "SELECT * FROM tbl_student where user_id='$id'";
$result = $obj->executequery($sqlquery);
$dis=mysqli_fetch_array($result);
$wallet_no= $dis["wallet_no"];
$sql = "select * from tbl_walletinfo where wallet_no='$wallet_no'";
$res = $obj->executequery($sql);
$row=mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">
 <!-- Favicons -->
 <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="assets/css/main.css" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note Sharing Pro</title>
    <style>
        /* Basic reset */
        body,
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        /* Container for the navigation bar */
        .main_nav_container {
            background-color: #333;
            /* Background color of the navbar */
            overflow: hidden;
            /* Clearfix for floats */
        }

        .main_nav {
            display: flex;
            /* Display flex to align items horizontally */
            justify-content: center;
            /* Center items horizontally */
        }

        .main_nav_list {
            display: flex;
            /* Display flex for horizontal alignment */
            padding: 0;
        }

        .main_nav_item {
            margin: 0;
            /* Remove default margin */
        }

        .main_nav_item a {
            display: block;
            color: white;
            /* Text color */
            text-align: center;
            /* Center text */
            padding: 14px 20px;
            /* Padding around the text */
            text-decoration: none;
            /* Remove underline */
            font-size: 16px;
            /* Font size */
            transition: background-color 0.3s ease;
            /* Smooth background color transition */
        }

        .coin_image {
            width: 30px;
            /* Set the desired width */
            height: 30px;
            /* Set the height to match the width */
            margin-right: 4px;
            /* Space between the image and the text */
            vertical-align: middle;
            /* Align the image vertically in the middle of the text */
        }

        .main_nav_item a:hover {
            background-color: #575757;
            /* Background color on hover */
        }

        /* Responsive design */
        @media screen and (max-width: 768px) {
            .main_nav_list {
                flex-direction: column;
                /* Stack items vertically on small screens */
                align-items: center;
                /* Center items */
            }
        }
    </style>

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Note Sharing Pro</h1>
      </a>

      <nav id="navmenu" class="navmenu">
      <div class="main_nav">
            <ul class="main_nav_list">
                <li class="main_nav_item"><a href="index.php">Home</a></li>
                <li class="main_nav_item"><a href="profile.php">Profile</a></li>
                <li class="main_nav_item"><a href="../docview/view.php">Documents</a></li>
                <li class="main_nav_item"><a class="nav-link" href="chat.php">Chat</a></li>
                <li class="main_nav_item"> <a href="documentupload.php" class="nav_link">
                        <img src="coin_img.png" alt="Coin" class="coin_image">
                      Coin Remaining: <?php echo $row['coin_count'];?></a>
                </li>
                <li> <a class="main_nav_item" href="../logout.php">LogOut</a></li>
            </ul>
        </div>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

     

    </div>
  </header>