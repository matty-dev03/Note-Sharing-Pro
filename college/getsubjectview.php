<?php

session_start();
require_once("../dboperation.php");
 $obj=new dboperation();
 $collegeid=$_SESSION['college_id'];
 $course_id=$_POST["course_id"];
 $sqlquery="SELECT Distinct (s.subject_id) as subject_id, s.subject_name FROM tbl_subject s inner join tbl_course c on c.course_id=s.course_id inner join tbl_college_course cc on cc.course_id=c.course_id where cc.course_id='$course_id' AND s.college_id = '$collegeid'";
$result=$obj->executequery($sqlquery);
?>

<!-- partial -->

                                <thead>
                                    <tr>
                                        <th>Index</th>
                                        <th>Subject Name</th>
                                        <!-- <th>Edit</th> -->
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
                          <td><?php echo $display["subject_name"];?></td>
                                             
                          <!-- <td>
                        <a href="editcourse.php?course_id=<?php echo $display["course_id"];?>" onclick="return confirm('Are you sure want to edit?')">Edit</a>
                          </td> -->

                          <td>
                        <a href="deletecourse.php?subject_id=<?php echo $display["subject_id"];?>" onclick="return confirm('Are you sure want to delete?')">Delete</a>
                          </td>
                                    </tr>
                                    <?php
                        }
                        ?>
                                </tbody>
                           
    <?php
    include_once ('footer.php');
    ?>