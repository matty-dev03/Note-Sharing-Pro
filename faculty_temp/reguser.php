<!DOCTYPE html>

<?php
// include_once("header.php");
include_once("../dboperation.php");
$obj=new dboperation();
$sqlquery="select * from tbl_district";
$sqlquery0="select * from tbl_college";
$result0=$obj->executequery($sqlquery0);
$result=$obj->executequery($sqlquery);
?>

<script src="../jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function()

{
  alert("ajax applied");

  $("#district_id").change(function()
{
     var district_id=$(this).val();
	alert(district_id)
		$.ajax({
			type: "POST",
			url: "getstudentlocation.php",
			data: "district_id="+district_id,
			
			success: function(data){
				$("#divlocation").html(data);
			}
		});
  });
	});
 </script>

<script src="../jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function()

{
  // alert("ajax applied");

  $("#college_id").change(function()
{
     var college_id=$(this).val();
	
		$.ajax({
			type: "POST",
			url: "getstudentdepartment.php",
			data: "college_id="+college_id,
			
			success: function(data){
				$("#divdepartment").html(data);
			}
		});
  });
	});
 </script>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration Form</title>
  <!-- MDBootstrap CSS -->
  <link href="mdb.min.css" rel="stylesheet">
  <style>
    .background-image {
      /* background-color: white; */
      /* background-size: cover; */
      background-position: center;
      /* height: 100vh; */
      position: relative;
    }
    .background-image::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5); /* Black overlay with transparency */
    }
    .card-container {
    position: relative;
    z-index: 1;
    background: rgba(0, 0, 0, 0.7); /* Black background with transparency */
    border-radius: 0.25rem;
    padding: 2rem;
    color: white;
    display: inline-block; /* Allows the container to size according to its content */
    max-width: 100%; /* Ensures the container doesn't overflow the viewport */
    box-sizing: border-box; /* Ensures padding is included in the container's size */
}
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      line-height: 2.15;
      padding-left: .75em;
      padding-right: .75em;
    }
    .card-registration .select-arrow {
      top: 13px;
    }
    .form-control::placeholder {
      color: white !important;
    }
    .form-outline .form-label {
      color: white;
    }


  </style>
</head>
<body>
  <section class="h-100">
    <div class="background-image">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-8 col-lg-6 col-xl-5 card-container">
            <h3 class="mb-5 text-uppercase">Student Registration Form</h3>

            <form action="studentaction.php" method="POST"  enctype="multipart/form-data">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example1m" name="name" class="form-control form-control-lg" placeholder="Name"/>
                  <label class="form-label" for="form3Example1m">Name</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example1n" name="phone" class="form-control form-control-lg" placeholder="Phone Number"/>
                  <label class="form-label" for="form3Example1n">Phone Number</label>
                </div>
              </div>

              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="email" id="form3Example1m1" name="email" class="form-control form-control-lg" placeholder="Email"/>
                  <label class="form-label" for="form3Example1m1">Email</label>
                </div>
              </div>

            <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
              <h6 class="mb-0 me-4">Gender: </h6>
              <div class="form-check form-check-inline mb-0 me-4">
                <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" />
                <label class="form-check-label" for="femaleGender">Female</label>
              </div>
              <div class="form-check form-check-inline mb-0 me-4">
                <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" />
                <label class="form-check-label" for="maleGender">Male</label>
              </div>
            </div>

              <div class="col-md-6 mb-4">
                <select class="form-select" name="district_id" id="district_id">
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
              <div class="col-md-6 mb-4" id="divlocation">
                  <select name="location"  class="form-control">
                                    <option>Select Location</option> 
                               
                                </select>
                  </select>
              </div>

            <div class="col-md-6 mb-4">
                <select class="form-select" name="college" id="college_id">
                  <option value="1">Select College</option>
                  <?php
                                 while($display=mysqli_fetch_array($result0))
                                {
                                ?>
                                <option value="<?php echo $display["college_id"];?>"><?php echo $display["college_name"];?></option>
                                <?php
                                }
                                ?>        
                              </select>
              </div>
              <div class="col-md-6 mb-4" id="divdepartment">
                  <select name="department_id"  class="form-control">
                                    <option>Select Department</option> 
                               
                                </select>
                  </select>
              </div>


            <div class="">
              Date of birth:
              <input type="date" name="dob" id="form3Example9" style="padding: 5px; font-size: 16px; transition: width 0.3s ease; box-sizing: content-box;" oninput="this.style.width = (this.value.length + 1) + 'ch';" placeholder="Date of birth"/>
              <label class="form-label" for="form3Example9"></label>
                              </br>
            </div>
                              </br>

            <div class="form-outline mb-4">
              <input type="text" name="username" id="form3Example90" class="form-control form-control-lg" placeholder="Username"/>
              <label class="form-label" for="form3Example90">Username</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password" id="form3Example99" class="form-control form-control-lg" placeholder="Password"/>
              <label class="form-label" for="form3Example99">Password</label>
            </div>

        

            <!-- <div class="form-outline mb-4">
              <input type="text" id="form3Example97" class="form-control form-control-lg" placeholder="Email ID"/>
              <label class="form-label" for="form3Example97">Email ID</label>
            </div> -->
            <div class="form-group row">
                      <label for="exampleInputimg" class="col-sm-3 col-form-label">User image</label>
                      <div class="col-sm-9">
                      <input type="file" class="form-control" id="exampleInputimg" name="filephoto" placeholder="Photo">

                      </div>
            <div class="d-flex justify-content-end pt-3">
              <button type="reset" class="btn btn-light btn-lg">Reset all</button>
              <input type="submit" class="btn btn-warning btn-lg ms-2">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MDBootstrap JavaScript -->
  <script src="mdb.min.js"></script>
</body>
</html>
