<?php
require_once("../dboperation.php");
$obj=new dboperation();
$college_id=$_POST["college_id"];
$sqlquery="select * from tbl_college_department cd inner join tbl_college c on c.college_id=cd.college_id inner join tbl_department d on cd.department_id=d.department_id where cd.college_id='$college_id'";
$result=$obj->executequery($sqlquery);
?>


<div class="form-group">
							<select name="collegedepartmentid" id="collegedepartmentid" class="form-control input_field search_form_degree" >
                                <option>Choose your department</option>
                                <?php
                      while($display=mysqli_fetch_array($result))
                      {
                      ?>
                      <option value="<?php echo $display["department_id"];?>"><?php echo $display["department_name"];?></option>
                      <?php
                      }
                      ?> 
                      </select>

                                </select>
						</div>