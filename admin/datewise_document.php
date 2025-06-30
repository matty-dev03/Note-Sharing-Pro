<?php
include("header.php");
include("../dboperation.php");
$obj=new dboperation();
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Note sharing Pro</title>
    </head>
   <body style="background-image:url(../Guest/images/account-bg.jpg)">
   <form action="" method="POST">
    <div class="logo">
      <a href="./index.php">
        <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
    </div>
    <div class="container" style="width:120%;margin-bottom: 5%;padding-top:0%">
      <div class="col-md-12"
        style="box-shadow: 2px 2px 15px #1b93e1; border-radius:0px; top: 14px; margin-left:37px;background-color:white">
        <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;padding-top:2%">DATEWISE COIN ALLOCATION REPORT</h2>
        <br>
        <div class="row">
          <div class="col-md-3" style="text-align:right">
            <label>From date:</label>
          </div>
          <div class="col-md-6">
            <input type="date" class="form-control" name="fromdate" id="fdate" style="width:500px;" onchange="hidedate()" required>
            </td>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3" style="text-align:right">
            <label>To date:</label>
          </div>
          <div class="col-md-6">
            <input type="date" class="form-control" name="todate" id="tdate"  style="width:500px;">
            </td>
          </div>
        </div>
        <br>
        <div class="row">
          <input type="submit" name="btnsubmit" value="Submit" class="btn btn-primary"
            style="margin-left:63%;margin-bottom:2%">
        </div>

        <br>
  </form>
  <form action="" method="POST">
    <?php

if(isset($_POST["btnsubmit"]))
{
	$fromdate=$_POST["fromdate"];
	$todate=$_POST["todate"]; 
	$_SESSION['fdate']=$fromdate;
	$_SESSION['tdate']=$todate;
	
	
	$s=1;
	?>

<div class="col-md-12"
        style="box-shadow: 2px 2px 10px #1b93e1; border-radius:50px;margin-top:-15px;background-color:white">
        <br>
        <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">DATEWISE COIN ALLOCATION REPORT</h2>
        <br>

        <div class="row">
          <div class="col-md-3" style="text-align:right">
            <label>From date:</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" name="fromdate" readonly value="<?php echo $fromdate ?>"
              style="width:500px;">
            </td>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3" style="text-align:right">
            <label>To date:</label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" name="todate" readonly value="<?php echo $todate ?>"
              style="width:500px;">
            </td>
          </div>
        </div>
        <br>
  <div style="padding-bottom:4%">
      <table class="table table-hover" style="border: 2px solid #adaaaa;margin-left:4px; box-shadow: 3px 3px 11px #777777; padding-bottom:content;background-color:white">
      
      <th> No.</th>
    <th>Document</th>  
    <th>Student Name</th>  
    <th>Category</th>
    <th>Allocated Coin</th>
    
    
    <?php


$sql="SELECT count(*) as count,document_name,name,category,coin FROM tbl_document d inner join tbl_student s on d.user_id=s.user_id where
d.upload_date >='$fromdate' and d.upload_date <='$todate' group by d.document_id";
$res=$obj->executequery($sql);

   while($display=mysqli_fetch_array($res))
	{
    echo "<tr>";
    echo"<td>".$s++."</td>";
    echo "<td>".$display["document_name"]."</td>";
    echo "<td>".$display["name"]."</td>";
    echo "<td>".$display["category"]."</td>";
    echo "<td>".$display["coin"]."</td>";
    echo "</tr>";
	
	
	
	
	
  }
echo "</table>";;
}

?>
    </form>
</div>
  </div>
      </div>
      </div>
      </div>

</body>
</html>
<script>
    document.addEventListener("DOMContentLoaded", function() {
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
  var yyyy = today.getFullYear();

  today = yyyy + '-' + mm + '-' + dd;
  document.getElementById("fdate").setAttribute("max", today);
  document.getElementById("tdate").setAttribute("max", today);

});
</script>
<script>
   function hidedate() {
  var today = new Date(document.getElementById("fdate").value);
  // alert(today)

  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
  var yyyy = today.getFullYear();

  today = yyyy + '-' + mm + '-' + dd;
  alert(today)
  document.getElementById("tdate").setAttribute("min", today);
}
</script>
<?php
include("footer.php");
?>
	</div>
