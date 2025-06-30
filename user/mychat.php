<?php
//session_start();
include_once("../dboperation.php");
$obj = new dboperation();

?>


<div class="col-lg-4">
	<div class="panel panel-default">
	<?php
		$id=$_REQUEST['id'];

		  $me="select * from chat_member left join chatroom on chatroom.chatroomid=chat_member.chatroomid where chat_member.userid='".$_SESSION['user_id']."' order by chatroom.date_created desc";
		$result=$obj->executequery($me);
		$numme=mysqli_num_rows($result);
	?>
		<div class="panel-heading"><center><strong>My Chatrooms <span class="badge"><?php echo $numme; ?></span></strong></center></div>
		<div class="panel-body">
		<table width="100%" class="table table-striped table-bordered table-hover" id="myChatRoom">
			<thead>
			<th>Chat Room Name</th>
			<th></th>
			</thead>
			<tbody>
			<?php
				// $my=mysqli_query($conn,"select * from chat_member left join chatroom on chatroom.chatroomid=chat_member.chatroomid where chat_member.userid='".$_SESSION['id']."' order by chatroom.date_created desc");


				 $my="select * from chat_member left join chatroom on chatroom.chatroomid=chat_member.chatroomid where chat_member.userid='".$_SESSION['user_id']."' order by chatroom.date_created desc";
				$result1=$obj->executequery($my);

					while($myrow=mysqli_fetch_array($result1)){
						$nq="select * from chat_member where chatroomid='".$myrow['chatroomid']."'";
						$result2=$obj->executequery($nq);
						?>
						<tr>
							<td><span class="glyphicon glyphicon-user"></span><span class="badge"><?php echo mysqli_num_rows($result2); ?></span> <a href="chatroom.php?id=<?php echo $myrow['chatroomid']; ?>"><?php echo $myrow['chat_name']; ?></a></td>
							<td>
								<?php
								// echo $memb="select * from chatroom where userid='".$_SESSION['user_id']."' and chatroomid='".$myrow['chatroomid']."'";
								// 	$result3=$obj->executequery($memb);
								// 	if (mysqli_num_rows($result3)>0){
								// 		?>
								<!-- // 		<button type="button" class="btn btn-danger btn-sm delete2" value="<?php //echo $myrow['chatroomid']; ?>">Delete</button> -->
								 		<?php
								// 	}
								// 	else{
								// 		?>
								<!-- // 		<button type="button" class="btn btn-warning btn-sm leave2" value="<?php //echo $myrow['chatroomid']; ?>">Leave</button> -->
								 		<?php
								// 	}
								?>
							</td>
						</tr>
						<?php
					}
			?>
			</tbody>
		</table>
		</div>
	</div>
</div>