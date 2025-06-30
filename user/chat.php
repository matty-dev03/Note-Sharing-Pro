<?php
session_start();
include_once("header.php");
include_once("../dboperation.php");
$obj = new dboperation();

?>
<!-- <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
    
  </div> -->
<div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
    <form action="docuploadaction.php" method="POST" enctype="multipart/form-data"  style="margin-top:90px;margin-left:20px;margin-right:20px;">
      <h1 class="formbold-form-title">Join Group</h1>
      <div class="col-lg-12">
        <div class="panel panel-default" style="height:50px;">
          <span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong><span
                class="glyphicon glyphicon-list"></span> List of Chat Rooms</strong></span>
          <!-- <div class="pull-right" style="margin-right:10px; margin-top:7px;">
      <a href="#add_chatroom" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add</a>
    </div> -->
        </div>
        <table width="100%" class="table table-striped table-bordered table-hover" id="chatRoom">
          <thead>
            <tr>
              <th>Chat Room Name</th>

              <th>Date Created</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $uid = $_SESSION['user_id'];
            $query = "select * from chatroom order by date_created desc";
            $result = $obj->executequery($query);
            while ($row = mysqli_fetch_array($result)) {
              $query2 = "select * from chat_member where chatroomid='" . $row['chatroomid'] . "' and status='accepted'";
              $num = $obj->executequery($query2);
              $query3 = "select * from chat_member where chatroomid='" . $row['chatroomid'] . "' and userid=$uid";
              $result1 = $obj->executequery($query3);
              if (mysqli_num_rows($result1) == 0) {
                ?>
                <tr>
                  <td><span class="glyphicon glyphicon-user"></span><span
                      class="badge"><?php echo mysqli_num_rows($num); ?></span> <input type="hidden"
                      id="name<?php echo $row['chatroomid']; ?>"
                      value="<?php echo $row['chat_name']; ?>"><?php echo $row['chat_name']; ?></td>

                  <td><?php echo date('M d, Y - h:i A', strtotime($row['date_created'])); ?></td>
                  <td><a href="chatroomjoin.php?id=<?php echo $row['chatroomid']; ?>" class="btn btn-success"><span
                        class="glyphicon glyphicon-comment"></span> Join</a>
                  </td>
                </tr>
                <?php
              } else {
                $row1 = mysqli_fetch_array($result1);
                if ($row1['status'] == 'requested') {

                  ?>
                  <tr>
                    <td><span class="glyphicon glyphicon-user"></span><span
                        class="badge"><?php echo mysqli_num_rows($num); ?></span> <input type="hidden"
                        id="name<?php echo $row['chatroomid']; ?>"
                        value="<?php echo $row['chat_name']; ?>"><?php echo $row['chat_name']; ?></td>

                    <td><?php echo date('M d, Y - h:i A', strtotime($row['date_created'])); ?></td>
                    <td><b>Requested</b></td>
                  </tr>
                  <?php
                } else {
                  ?>
                  <tr>
                    <td><span class="glyphicon glyphicon-user"></span><span
                        class="badge"><?php echo mysqli_num_rows($num); ?></span> <input type="hidden"
                        id="name<?php echo $row['chatroomid']; ?>"
                        value="<?php echo $row['chat_name']; ?>"><?php echo $row['chat_name']; ?></td>

                    <td><?php echo date('M d, Y - h:i A', strtotime($row['date_created'])); ?></td>
                    <td><a href="chatroom1.php?id=<?php echo $row['chatroomid']; ?>" class="btn btn-info"><span
                          class="glyphicon glyphicon-comment"></span> Chat</a>

                    </td>
                  </tr>
                  <?php

                }
              }
            }
            ?>
          </tbody>
        </table>
      </div>




    </form>
  </div>
</div>
</body>

</html>