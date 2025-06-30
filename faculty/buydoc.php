<?php
session_start();
include_once("header.php");
include_once('../dboperation.php');
$obj=new dboperation();
$user_id=$_SESSION['user_id'];
$doc_id=$_GET['doc_id'];
$date=date('Y-m-d');
$sql="select * from tbl_access_info where document_id='$doc_id' and user_id='$user_id'";
$res=$obj->executequery($sql);
if(mysqli_num_rows($res)>0)
{
    echo "<script> alert('Already you have access to this document');
    window.location='view.php';</script>";
}
else
{
    $sql1="insert into tbl_access_info(document_id,access_date,user_id) values('$doc_id','$date','$user_id')";
    $res1=$obj->executequery($sql1);

    $sql2="select * from tbl_document where document_id='$doc_id'";
    $res2=$obj->executequery($sql2);
    $display=mysqli_fetch_array($res2);
    $coin=$display['coin'];

    $sql3="select * from tbl_faculty where faculty_id='$user_id'";
    $res3=$obj->executequery($sql3);
    $disp=mysqli_fetch_array($res3);
    // $wallet_no=$disp['wallet_no'];

    $sql4="select * from tbl_walletinfo where wallet_no='$wallet_no'";
    $res4=$obj->executequery($sql4);
    $dis=mysqli_fetch_array($res4);
    // $coin_count=$dis['coin_count'];
    // $wallet_id=$dis['wallet_id'];

    // if($coin_count<$coin)
    // {
    //     echo "<script> alert('Insufficient coin to buy the document');
    //     window.location='view.php';</script>";
    // }
    // else
    // {
    //   $balance=$coin_count-$coin;
    //   $sql5="update tbl_walletinfo set coin_count='$balance' where wallet_id='$wallet_id'";
    //   $res5=$obj->executequery($sql5);

    //   if($res5==1)
    //   {
          echo "<script> alert('Successfully buy the document');
          window.location='view.php';</script>";
    //   }
    // }
}
?>