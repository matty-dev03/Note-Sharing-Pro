<?php
include_once("../dboperation.php");
$obj=new dboperation();
$college_department_id=$_POST["college_department_id"];
$sqlquery="select * from tbl_faculty f inner join tbl_college_department c on f.college_department_id=c.college_department_id inner join tbl_department d on d.department_id= c.department_id inner join tbl_location l on f.location_id=l.location_id where f.college_department_id='$college_department_id'";
$result=$obj->executequery($sqlquery);
?>

<div class="table-responsive"  id="divdepartment">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Index</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>                                        
                                        <th>Location</th>
                                        <th>Username</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                            <?php
                                                $i=1;
                                                while($display=mysqli_fetch_array($result))
                                                {

                                            ?>

                                            <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $display["name"];?></td>
                                            <td><?php echo $display["email"];?></td>
                                            <td><?php echo $display["phoneno"];?></td>
                                            <td><?php echo $display["location_name"];?></td>
                                            <td><?php echo $display["username"];?></td>
                                            <td>
                                            <a href="editfaculty.php?faculty_id=<?php echo $display["faculty_id"];?>" onclick="return confirm('Are you sure want to edit?')"><button type="submit" class="btn btn-primary">Edit</button></a>
                                            </td>
                                            <td>
                                                 <a href="deletefacaction.php?faculty_id=<?php echo $display["faculty_id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                                             </td>
                                           
                                       
                                        </tr>

                                            <?php
                                            }
                                            ?>
                                            
                                   </tbody>
                            </table>