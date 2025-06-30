<?php
session_start();
include_once("../dboperation.php");
$obj = new dboperation();
if (isset($_POST['fetch'])) {
	$id = $_POST['id'];

	 $query = "select * from chat left join tbl_student on tbl_student.user_id=chat.userid where chatroomid='$id' order by chat_date asc" or die(mysqli_error());
	$result = $obj->executequery($query);
	while ($row = mysqli_fetch_array($result)) {
		if ($row['user_id'] == $_SESSION['user_id']) {
			?>
			<div style="margin-left:920px;margin-right:10px;">
				<img src="../<?php if (empty($row['photo'])) {
					echo "upload/profile.jpg";
				} else {
					echo $row['user_i`1mage'];
				} ?>"
					style="height:30px; width:30px; ">
				<span style="font-size:10px;"><i><?php echo date('M-d-Y h:i A', strtotime($row['chat_date'])); ?></i></span><br>
				<span style="font-size:11px; "><strong><?php echo $row['name']; ?></strong>: <?php echo $row['message']; ?></span>
			</div><br>
			<?php

		} else {
			?>
			<div>
				<img src="../<?php if (empty($row['photo'])) {
					echo "upload/profile.jpg";
				} else {
					echo $row['user_image'];
				} ?>"
					style="height:30px; width:30px; position:relative; top:15px; left:10px;">
				<span
					style="font-size:10px; position:relative; top:7px; left:15px;"><i><?php echo date('M-d-Y h:i A', strtotime($row['chat_date'])); ?></i></span><br>
				<span style="font-size:11px; position:relative; top:-2px; left:50px;"><strong><?php echo $row['name']; ?></strong>:
					<?php echo $row['message']; ?></span>
			</div>
			<?php
		}
	}
}
?>