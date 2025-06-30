<?php
include_once("header.php");

include_once("header.php");
include_once("../dboperation.php");
$obj=new dboperation();
$sqlquery="select * from tbl_district";
$result=$obj->executequery($sqlquery);
$sql="select * from tbl_college";
$result1=$obj->executequery($sql);
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-6">

			<!-- Search Section -->
			<div class="search_section d-flex flex-column align-items-center justify-content-center">
				<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
				<div class="search_content text-center">
					<h1 class="search_title">Register Now</h1>
					<form id="search_form" class="search_form" method="post" action="studregaction.php"  enctype="multipart/form-data">
						<div class="form-group">
							<input id="search_form_name" class="form-control input_field search_form_name" type="text" placeholder="Student Name" name="txtstudname" required="required" pattern="^([A-Z][a-zA-Z]*\s){1,}([A-Z][a-zA-Z]*)$"
       title="Must start with capital letters and contain at least two words, each followed by lowercase letters">
						</div>
						<div class="form-group">
							<input id="search_form_category" class="form-control input_field search_form_category" type="email" placeholder="Email" name="txtemail"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
							title="must enter a valid email address" value="" required="required">
						</div>
						<div class="form-group">
							<input id="search_form_degree" class="form-control input_field search_form_degree" type="text" placeholder="Phone no" name="txtphno"pattern="[0-9]{10}" value=""  required="required"  
							title="Must contain 10 digits" value="required">
						</div>


                        <div class="form-group">
							<input id="search_form_degree" name="image" class="form-control input_field search_form_degree" type="file" placeholder="Upload image" required="required">
						</div>
                        
                        <div class="form-group">
							<input id="search_form_category" class="form-control input_field search_form_category" type="date" placeholder="DOB" name="dob" required="required">
						</div>

                        <div class="form-group">
							<select id="college_id" name="college_id" class="form-control input_field search_form_degree" required="required" >
                                <option>Choose your College</option>
                                <?php
                                 while($display=mysqli_fetch_array($result1))
                                {
                                ?>
                                <option value="<?php echo $display["college_id"];?>"><?php echo $display["college_name"];?></option>
                                <?php
                                }
                                ?>      

                                </select>
						</div>


                        <div class="form-group">
							<select id="collegedepartmentid" name="collegedepartmentid" class="form-control input_field search_form_degree"  required="required">
                                <option>Choose your Department</option>
                                </select>
						</div>

                        <div class="form-group">
							<select class="form-control input_field search_form_degree" id="district_id" name="district"  required="required">
                                <option>Choose your District</option>
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

                        <div class="form-group">
							<select id="location" name="location" class="form-control input_field search_form_degree"  required="required">
							<option>Choose your Location</option>

                                </select>
						</div>
                        <div class="form-group">
							<input id="search_form_degree" class="form-control input_field search_form_degree" type="text" placeholder="username" name="txtusername"pattern="[a-zA-Z0-9]{5,15}"  
							title="Must contain minimum 5 and maximum 15 characters"  required="required">
						</div>


                        <div class="form-group">
							<input id="search_form_degree" class="form-control input_field search_form_degree" type="password" placeholder="password" name="txtpassword"pattern="[a-zA-Z0-9]{8,15}" 
         title="Must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters" 
		 required="required">
						</div>

						<button id="search_submit_button" type="submit" class="btn btn-primary search_submit_button trans_200">Submit</button>
					</form>
				</div> 
			</div>

		</div>
	</div>
</div>
<?php
include_once("footer.php");
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
			url: "getlocation.php",
			data: "district_id="+district_id,
			
			success: function(data){
				$("#location").html(data);
			}
		});
  });
	});
 </script>


<script>
    $(document).ready(function()

{
//   alert("ajax applied");

  $("#college_id").change(function()
{
     var college_id=$(this).val();
	
		$.ajax({
			type: "POST",
			url: "getcollegedepartment.php",
			data: "college_id="+college_id,
			
			success: function(data){
				$("#collegedepartmentid").html(data);
			}
		});
  });
	});
 </script>