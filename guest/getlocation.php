<?php
require_once("../dboperation.php");
$obj=new dboperation();
$district_id=$_POST["district_id"];
$sqlquery="select * from tbl_location l inner join tbl_district d on l.district_id=d.district_id  where l.district_id='$district_id'";
$result=$obj->executequery($sqlquery);
?>


<div class="form-group">
							<select name="location" id="location" class="form-control input_field search_form_degree" >
                                <option>Choose your Location</option>
                                <?php
                      while($display=mysqli_fetch_array($result))
                      {
                      ?>
                      <option value="<?php echo $display["location_id"];?>"><?php echo $display["location_name"];?></option>
                      <?php
                      }
                      ?> 
                      </select>

                                </select>
						</div>