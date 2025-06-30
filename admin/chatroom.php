<?php
include_once ('header.php');
include_once("../dboperation.php");
$obj=new dboperation();
?>
<div class="col-lg-12">
    <div class="panel panel-default" style="height:50px;">
		<span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong><span class="glyphicon glyphicon-list"></span> List of Chat Rooms</strong></span>
		<div class="pull-right" style="margin-left:110px; margin-top:7px;">
			<a href="#add_chatroom" data-toggle="modal" class="btn btn-primary" style="margin-left:1000px;"><span class="glyphicon glyphicon-plus"></span> Add</a>
		</div><br><br>
	</div><br><br>
	<table width="100%" class="table table-striped table-bordered table-hover" id="chatRoom">
        <thead>
            <tr>
                <th>Chat Room Name</th>
                <th>Date Created</th>
				<th>Action</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php
			$query="select * from chatroom order by date_created desc";
            $result=$obj->executequery($query);
			while($row=mysqli_fetch_array($result)){
			    $query2="select * from chat_member where chatroomid='".$row['chatroomid']."' and status='accepted'";
                $num=$obj->executequery($query2);
			?>
			<tr>
				<td><span class="glyphicon glyphicon-user"></span><span class="badge"><?php echo mysqli_num_rows($num); ?></span> <input type="hidden" id="name<?php echo $row['chatroomid']; ?>" value="<?php echo $row['chat_name']; ?>"><?php echo $row['chat_name']; ?></td>
					<td><?php echo date('M d, Y - h:i A', strtotime($row['date_created'])); ?></td>
				<td>
					
				<a href="chatrequest.php?cid=<?php echo $row['chatroomid']; ?>" class="btn btn-primary edit" ><span class="glyphicon glyphicon-pencil"></span> View Request</a> || 
				
					
					<!-- <button class="btn btn-warning edit" value="<?php echo $row['chatroomid']; ?>"><span class="glyphicon glyphicon-pencil"></span> Edit</button> ||  -->
					<button class="btn btn-danger delete" value="<?php echo $row['chatroomid']; ?>"><span class="glyphicon glyphicon-trash"></span> Delete</button>
				</td>
			</tr>
			<?php
			}
		?>
        </tbody>
    </table>                     
</div>



<!-- Add Chat Room -->
<div class="modal fade" id="add_chatroom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Chat Room</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form action="add_chatroom.php" method="post">
					<div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Chat Room Name:</span>
						<input type="text" style="width:350px;" class="form-control" name="chat_name" required>
					</div>
					<!-- <div class="form-group input-group">
						<span class="input-group-addon" style="width:150px;">Password:</span>
						<input type="text" style="width:350px;" class="form-control" id="chat_password">
					</div> -->
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary addchatroom"><span class="glyphicon glyphicon-check"></span> Add</button>
				</form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->
 
<script src="Assets/js/jquery.dataTables.min.js"></script>
<script src="Assets/js/js/dataTables.bootstrap.min.js"></script>
<script src="Assets/js/js/dataTables.responsive.js"></script>
<script src="../jquery-3.7.1.min.js"></script>
<script>
$(document).ready(function(){
	
	$('#chatRoom').DataTable({
	"bLengthChange": true,
	"bInfo": true,
	"bPaginate": true,
	"bFilter": true,
	"bSort": false,
	"pageLength": 7
	});
	
	// $('.addchatroom').click( function(){
    //     alert("haii");
	// 	chatname=$('#chat_name').val();
		
	// 		$.ajax({
	// 			url:"add_chatroom.php",
	// 			method:"POST",
	// 			data:{
	// 				chatname: chatname,
				
	// 			},
	// 			success:function(data){
	// 			window.location.href='chatroom.php?id='+data;
	// 			}
	// 		});
		
	// });
	//
	$(document).on('click', '.delete', function(){
		var rid=$(this).val();
		$('#delete_room').modal('show');
		$('.modal-footer #confirm_delete').val(rid);
	});
	
	$(document).on('click', '#confirm_delete', function(){
		var nrid=$(this).val();
		$('#delete_room').modal('hide');
		$('body').removeClass('modal-open');
		$('.modal-backdrop').remove();
			$.ajax({
				url:"deleteroom.php",
				method:"POST",
				data:{
					id: nrid,
					del: 1,
				},
				success:function(){
					window.location.href='index.php';
				}
			});
	});
	
	$(document).on('click', '.edit', function(){
		var rid=$(this).val();
		var name=$('#name'+rid).val();
		var pass=$('#pass'+rid).val();
		$('#edit_room').modal('show');
		$('.modal-body #room_name').val(name);
		$('.modal-body #room_password').val(pass);
		$('.modal-footer #confirm_update').val(rid);
	});
	
	$(document).on('click', '#confirm_update', function(){
		var nrid=$(this).val();
		var roomname=$('#room_name').val();
		var roompass=$('#room_password').val();
		$('#edit_room').modal('hide');
		$('body').removeClass('modal-open');
		$('.modal-backdrop').remove();
			$.ajax({
				url:"update_room.php",
				method:"POST",
				data:{
					id: nrid,
					name: roomname,
					pass: roompass,
					edit: 1,
				},
				success:function(){
					window.location.href='index.php';
				}
			});
	});
 
});
</script>	
<?php
    include_once ('footer.php');
    ?>