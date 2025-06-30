<?php
include("header.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>>Note Sharing</title>
</head>

<body>
<form action="Excel/excel_STUDENT.php" method="post">
<div class="logo">
              <a href="./index.php">
                <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                 </div>
  <div class="container" style="width:100%;margin-left:15%;margin-bottom: 5%;" >
  <div class="row">
  <div class="col-md-12" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:15px; top: 106px;    margin-bottom: 59px;">
  <div class="row" style="margin-left: -173%;margin-top: 2%;margin-bottom: -5%;">
      <input type="submit" name="addnew" value="Export" class="btn btn-primary" style="margin-left:63%">
    </div>
  <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">STUDENT REPORT</h2>
  <div class="form-horizontal" style="margin-left:0px;">
  <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">

  <tr>
                          <th> Sl.No </th>
                          <th> Student Name  </th> 
                          <th> Email </th>
                          <th> Phone </th>
                          <th> Department </th>
                          <th> College </th>
                          <th> Coin Count </th>
                          
                          
                          
                        </tr>
   
    <?php
include("../dboperation.php");
$obj=new dboperation();
$s=1;
$sql="SELECT d.department_name,c.college_name,w.coin_count,s.name,s.email,s.phone from tbl_student s
 inner join tbl_department d on s.department_id=d.department_id 
 inner join tbl_college c on s.college_id=c.college_id inner join 
 tbl_walletinfo w on s.wallet_no=w.wallet_no";
 
$res=$obj->executequery($sql);
   while($display=mysqli_fetch_array($res))
   {
    ?>
	<tr>
                          <td class="py-1"><?php echo $s++;?></td>
                          <td> <?php echo $display["name"];?></td>
                          <td> <?php echo $display["email"];?></td>
                          <td> <?php echo $display["phone"];?></td>
                          <td> <?php echo $display["department_name"];?></td>
                          <td> <?php echo $display["college_name"];?></td>
                          <td> <?php echo $display["coin_count"];?></td>
                          
                          
                      </tr>
                      <?php  
	
  }
  ?>
</table>

</div>
  </div>
  </div>
  <div> </div>
  </div>
  </div>
</form>
</body>
</html>
<?php
include("footer.php");
?>