<?php
session_start();
include_once("../dboperation.php");
$obj=new dboperation();
$id = $_SESSION['user_id'];
$sqlquery = "SELECT * FROM tbl_student where user_id='$id'";
$result = $obj->executequery($sqlquery);
$dis=mysqli_fetch_array($result);
// $wallet_no= $dis["wallet_no"];
// $sql = "select * from tbl_walletinfo where wallet_no='$wallet_no'";
// $res = $obj->executequery($sql);
// $row=mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">


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
</head>

<body>
    <nav class="main_nav_container">
        <div class="main_nav">
            <ul class="main_nav_list">
                <li class="main_nav_item"><a href="index.php">Home</a></li>
                <li class="main_nav_item"><a href="documentupload">Upload Document </a></li>
                <li class="main_nav_item"><a href="../guest/login.php">Log Out</a></li>
                <li class="main_nav_item"><a href="..profile">Profile</a></li>
                               <!-- <li class="main_nav_item"> <a href="login.php" class="nav_link">
                        <img src="coin_img.png" alt="Coin" class="coin_image">
                      Coin Remaining: <?php echo $row['coin_count'];?></a>
                </li> -->
            </ul>
        </div>
    </nav>
</body>

</html>