<?php
session_start();
include_once ("../dboperation.php");
$obj = new db_operation();
$emp_id =$_SESSION["emp_id"];
?>
<link rel="stylesheet" href="empprofile.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
        <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details" target="__blank">Profile</a>
        <!-- <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page" target="__blank">Billing</a> -->
        <!-- <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page" target="__blank">Security</a> -->
        <!-- <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page"  target="__blank">Notifications</a> -->
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <!-- <div class="card-header">Profile Picture</div> -->
                <!-- <div class="card-body text-center"> -->
                    <!-- Profile picture image-->
                    <!-- <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt=""> -->
                    <!-- Profile picture help block-->
                    <!-- <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div> -->
                    <!-- Profile picture upload button-->
                    <!-- <button class="btn btn-primary" type="button">Upload new image</button> -->
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Profile </div>
                <div class="card-body">
                    <form method="post">
					<?php
                        $sql = "select * from tbl_employee e inner join tbl_location l on e.location_id=l.location_id where emp_id='$emp_id' ";
                        $res = $obj->executequery($sql);
                        $display = mysqli_fetch_array($res);
                        ?>
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username </label>
                            <input class="form-control" id="username" type="text"  name="name" readonly value="<?php echo $display['username']; ?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">Name</label>
                                <input class="form-control" id="name" type="text" readonly value="<?php echo $display['name']; ?>">
                            </div>

                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Pincode</label>
                                <input class="form-control" id="inputOrgName" type="text" readonly value="<?php echo $display['pincode']; ?>">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Location</label>
                                <input class="form-control" id="inputLocation" type="text" readonly value="<?php echo $display['location_name']; ?>">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control" id="inputEmailAddress" type="email"  value="<?php echo $display['email']; ?>" required>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel" readonly value="<?php echo $display['phone']; ?>">
                            </div>
                            
                            <!-- <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                            </div> -->
                        </div>
                        <!-- Save changes button-->
                        <!-- <button class="btn btn-primary" type="button">Save changes</button> -->
						<a href="profileedit.php?emp_id=<?php echo $display['emp_id']; ?>">
						<input type="button" class="btn btn-primary " value="Edit Profile "></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>