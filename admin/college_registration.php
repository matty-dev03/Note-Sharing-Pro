<?php
include_once ('header.php');
include_once("../dboperation.php");
$obj=new dboperation();

$sqlquery="select * from tbl_district";
$result=$obj->executequery($sqlquery);
?>
<!-- partial -->

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
			url: "getcollegelocation.php",
			data: "district_id="+district_id,
			
			success: function(data){
				$("#divlocation").html(data);
			}
		});
  });
	});
 </script>
<div class="main-panel">


    <div class="content-wrapper">
        <div class="row">
            <div class="col-10 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary mr-1 mb-3" onclick='window.location.href="viewcolleges.php"'>View
                    Data </button>
            </div>

              <div class="col-md-10 grid-margin stretch-card  ">

                    <div class="card">

                      <div class="card-body">
                      <form action="collegeaction.php" method="POST" enctype="multipart/form-data" class="forms-sample">
                        <h4 class="card-title">College Registration</h4>
                        <p class="card-description">
                            add college details
                        </p>
                        <form action="locationaction.php" method="POST" enctype="multipart/form-data" class="forms-sample">
                            <div class="form-group">
                                <label for="exampleCollegename">College Name</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    name="Collegename"required pattern="^([A-Z][a-zA-Z]*\s){1,}([A-Z][a-zA-Z]*)$"
       title="Must start with capital letters and contain at least two words, each followed by lowercase letters">
                            </div>
                            <div  class="form-group">
                            <label for="exampleDistrictname">District Name</label>
                             <select id="district_id" name="District" class="form-control"required>
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
                    <select name="Location_id"  class="form-control" required>
                                <option>Select Location</option> 
                               
                                
                        </select>
                    </div>
                             </div>
                            <div class="form-group">
                                <label for="examplePhoneno.">Phone number:</label>
                                <input type="text" class="form-control" id="examplePhone" placeholder="Phone No." name="Phone"placeholder="contact" pattern="[0-9]{10}" value="" required  
                                title="Must contain 10 digits" value=""required>
                             </div>
                             <div class="form-group">
                                <label for="exampleEMail">Email</label>
                                <input type="email" class="form-control" id="exampleEmail" name="Email"
                                    placeholder="Email"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
                                    title="must enter a valid email address" value=""required>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleUsername">User name</label>
                                <input type="text" class="form-control" id="exampleUsername" name="collegeusername"
                                    placeholder="Username"pattern="[a-zA-Z0-9]{5,15}"  
                                    title="Must contain minimum 5 and maximum 15 characters" required>
                            </div>
                            <div class="form-group row">
                                 <label for="exampleInputimg" class="col-sm-3 col-form-label">College Logo</label>
                                 <div class="col-sm-9">
                                <input type="file" class="form-control" id="exampleInputimg" name="filephoto" placeholder="Photo"required>
                      </div>
                                 </div>
                            <div class="form-group">
                                <label for="examplePassword">Password</label>
                                <input type="password" class="form-control" id="examplePassword" name="Password"
                                    placeholder="Password" 
         title="Must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters" 
         required>
                            </div>
                          
                    </div>
                    <div>
                            <button type="submit" name="Submit"class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    include_once ('footer.php');
    ?>