<!DOCTYPE html>
<?php
include_once("header.php");
include_once("../dboperation.php");
$obj=new dboperation();
$collegeid = $_SESSION["college_id"];
$sqlquery="select * from tbl_district";
$sqlquery1="select distinct * from tbl_college_department l inner join tbl_department d on l.department_id=d.department_id where l.college_id='$collegeid'";
$result1=$obj->executequery($sqlquery1);
$result=$obj->executequery($sqlquery);
?>

<script src="../jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function()

{
//   alert("ajax applied");

  $("#district_id").change(function()
{
     var district_id=$(this).val();
	
		$.ajax({
			type: "POST",
			url: "getfacultylocation.php",
			data: "district_id="+district_id,
			
			success: function(data){
				$("#divlocation").html(data);
			}
		});
  });
	});
 </script>
<html>
	<head>
		<meta charset="utf-8">
		<title>Faculty Registration Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="college department/fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="college department/faculty/css/style.css">
	</head>

	<b>

		<div class="wrapper">
				<div class="inner" style="margin-right: 393px;
    margin-left: 330px;">
				<img src="images/image-1.png" alt="" class="image-1">
				<form action="facultyregaction.php" method="POST" enctype="multipart/form-data" class="forms-sample">
					<h3>Faculty Registration</h3>
					<div class="form-holder">
					Name:<input type="text" class="form-control" placeholder="Name" name="name"required pattern="^([A-Z][a-zA-Z]*\s){1,}([A-Z][a-zA-Z]*)$"
					title="Must start with capital letter followed by upper or lowercase letters">
					</div>

					<div class="form-holder">
					Email:<input type="email" class="form-control" placeholder="Email" name="email"placeholder="contact"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
								title="must enter a valid email address" value=""required>
					</div>

					<div class="form-holder">
					Phone No.:<input type="number" class="form-control" placeholder="Phone No." name="phnno"placeholder="contact" pattern="[0-9]{10}" value="" required  
					title="Must contain 10 digits" value="required">
					</div>
					<div>
					Department:
                    	<select id="department_id" name="department" class="form-control"required>
                              <option>Select Department</option> 
                                <?php
                                 while($display=mysqli_fetch_array($result1))
                                {
                                ?>
                                <option value="<?php echo $display["college_department_id"];?>"><?php echo $display["department_name"];?></option>
                                <?php
                                }
                                ?> 
               
                              </select>
                            
					</div>
                    <div  class="form-group">
                            <label for="exampleDistrictname">District Name</label>
                             <select id="district_id" name="district" class="form-control"required>
                                <option>Select district</option> 
                                <?php
                                 while($display=mysqli_fetch_array($result))
                                {
                                ?>
                                <option value="<?php echo $display["district_id"];?>"><?php echo $display["district_name"];?></option>
                                <?php
                                }
                                ?>        
                              </select>
                             </div>

                             <div id="divlocation">
                                <div  class="form-group">
                                <label for="exampleLocationname">Location Name</label>   
                                <select name="location"  class="form-control"required>
                                    <option>Select Location</option> 
                               
                                </select>
                    </div>
                             </div>

                    <div class="form-holder">
					Username:<input type="text" class="form-control" placeholder="username" name="username"pattern="[a-zA-Z0-9]{5,15}"  
					title="Must contain minimum 5 and maximum 15 characters" required>
					</div>
					
                    <div class="form-holder">
					Password:<input type="password" class="form-control" placeholder="Password" name="password"	
         title="Must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters" 
         required>
					</br>
				    <button type="submit" name="Submit"class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-white mr-2">Cancel</button>
							
				</div>
			</div>
			</br>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php
 include_once("footer.php");
?>