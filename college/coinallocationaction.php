<?php
include_once('../dboperation.php');
$obj=new dboperation();
$document_id=$_POST['documentid'];
$coin=$_POST['coin'];
$sql="update tbl_document set coin='$coin' where document_id='$document_id'";
$res=$obj->executequery($sql);

if($res==1)
{
    $sql1="select * from tbl_document d inner join tbl_student s on d.user_id=s.user_id where d.document_id='$document_id'";
    $res1=$obj->executequery($sql1);
    $row=mysqli_fetch_array($res1);
    $wallet_no=$row['wallet_no'];
    $sql2="select * from tbl_walletinfo where wallet_no='$wallet_no'";
    $res2=$obj->executequery($sql2);
    $row1=mysqli_fetch_array($res2);
    $wallet_amt=$row1['coin_count'];
    $total=$wallet_amt+$coin;
     $sql3="update tbl_walletinfo set coin_count='$total' where wallet_no='$wallet_no'";
    $res3=$obj->executequery($sql3);
    if($res3==1)
    {
        echo "<script>alert('Coin Updated Succesfully');window.location='coinallocation.php'</script>";
    }
    else
    {
        echo "<script>alert('Failed');window.location='coinallocation.php'</script>";
    }
}
?>