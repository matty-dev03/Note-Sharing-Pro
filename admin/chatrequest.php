<?php
include_once('header.php');
include_once("../dboperation.php");
$obj = new dboperation();
?>
<div class="col-lg-12">
	<div class="panel panel-default" style="height:50px;">
		<span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong><span
					class="glyphicon glyphicon-list"></span> List of Chat Rooms</strong></span>
		<div class="pull-right" style="margin-left:110px; margin-top:7px;">
			<!-- <a href="#add_chatroom" data-toggle="modal" class="btn btn-primary"><span
					class="glyphicon glyphicon-plus"></span> Add</a> -->
		</div><br><br>
	</div><br><br>
	<table width="100%" class="table table-striped table-bordered table-hover" id="chatRoom">
		<thead>
			<tr>
				<th>Student Name</th>
				<th>Action</th>

			</tr>
		</thead>
		<tbody>
			<?php
			$cid = $_GET['cid'];

			  $query2 = "select * from chat_member c inner join tbl_student s on c.userid=s.user_id where c.chatroomid='$cid' and status='requested'";
			$num = $obj->executequery($query2);
			while ($row = mysqli_fetch_array($num)) {
				?>
				<tr>
					<td><?php echo $row['name']; ?></td>
					<td>

						<a href="chataccept.php?cid=<?php echo $row['chat_memberid']; ?>"
							class="btn btn-warning edit"><span class=" glyphicon glyphicon-pencil"></span> Accept</a> ||

					</td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
</div>
<?php
include_once('footer.php');
?>