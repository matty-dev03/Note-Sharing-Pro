<?php 
session_start(); 
include('header.php');
include_once("../dboperation.php");
$obj = new dboperation();

$id = $_REQUEST['id'];

$chatq = "select * from chatroom where chatroomid='$id'";
$r = $obj->executequery($chatq);
$chatrow = mysqli_fetch_array($r);

$cmem = "select * from chat_member where chatroomid='$id' and status='accepted'";
$r1 = $obj->executequery($cmem);
?>

<head>
<style>
    /* General styling */
    body {
        background-color: #f7f9fc;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .container-fluid {
        margin-top: 20px;
        display: flex; /* Use flexbox for layout */
    }

    /* Chat Room Header */
    .panel-default {
        border: none;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 20px; /* Added margin for spacing */
        flex: 1; /* Allow flex grow */
        display: flex;
        flex-direction: column; /* Arrange children vertically */
    }

    .panel-default .panel-heading {
        background: linear-gradient(135deg, #1e90ff, #007bff);
        color: #fff;
        font-size: 22px; /* Increased font size for better visibility */
        padding: 15px 25px;
        border-bottom: 1px solid #007bff;
    }

    .panel .panel-heading .pull-right .btn {
        margin-left: 10px;
        border-radius: 20px;
    }

    /* Chat Area */
    #chat_area {
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        border: 1px solid #e0e0e0;
        max-height: 320px;
        overflow-y: auto;
        box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.1);
        flex: 1; /* Allow chat area to take available space */
    }

    /* Member List */
    .member-list {
        width: 250px; /* Fixed width for the member list */
        padding: 15px;
        background-color: #fff;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        margin-right: 20px; /* Space between member list and chat */
        max-height: 400px; /* Limit height */
        overflow-y: auto; /* Scroll if too many members */
    }

    /* Chat Message */
    .chat-message {
        margin-bottom: 15px;
        padding: 12px 18px;
        border-radius: 25px;
        background-color: #f1f1f1;
        max-width: 75%;
        word-wrap: break-word;
        position: relative;
    }

    .chat-message.sender {
        background-color: #1e90ff;
        color: #fff;
        margin-left: auto;
        text-align: right;
    }

    .chat-message.receiver {
        background-color: #f0f2f5;
        color: #333;
    }

    /* Input and Button Styling */
    .input-group {
        margin-top: 20px;
    }

    .form-control {
        border-radius: 30px;
        box-shadow: none;
        border: 1px solid #ccc;
        padding-left: 20px;
        height: 50px; /* Increased height for better touch target */
    }

    .btn-success {
        border-radius: 30px;
        background: linear-gradient(135deg, #28a745, #20c997);
        border: none;
        height: 50px; /* Increased height for better touch target */
        font-size: 16px;
        padding: 0 20px;
    }

    .btn-success:hover {
        background: linear-gradient(135deg, #20c997, #17a589);
    }

    /* Chat Header */
    .chat-header {
        font-size: 22px;
        color: #343a40;
        font-weight: bold;
    }

    .chat-subtext {
        font-size: 12px;
        color: #6c757d;
    }

    /* Custom Modal Styling */
    .modal-content {
        border-radius: 10px;
        border: none;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }

    .modal-header {
        background: linear-gradient(135deg, #007bff, #1e90ff);
        color: #fff;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .modal-footer .btn {
        border-radius: 30px;
    }

    /* Mobile adjustments */
    @media (max-width: 768px) {
        .panel-default {
            margin: 10px;
        }

        #chat_area {
            margin: 10px 0;
        }

        .member-list {
            width: 100%; /* Full width on mobile */
            margin-right: 0; /* No margin */
            margin-bottom: 20px; /* Space below */
        }
    }
</style>
</head>

<body>
    <?php //include('navbar.php'); ?>
    <div class="container-fluid" style="padding-top:100px">
        <div class="member-list">
            <div class="panel panel-default" style="height: auto;">
                <div class="panel-heading">
                    <strong>Members</strong>
                </div>
                <div class="panel-body" style="margin-top:10px;margin-left:10px;">
                    <?php
                    $rm = "select * from chat_member left join tbl_student on tbl_student.user_id=chat_member.userid where chat_member.chatroomid='$id' and chat_member.status='accepted'";
                    $result = $obj->executequery($rm);
                    while ($rmrow = mysqli_fetch_array($result)) {
                        ?>
                        <span>
                            <span class="glyphicon glyphicon-user"></span>
                            <?php echo $rmrow['name']; ?>
                        </span><br>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="panel panel-default" style="flex: 1; height: auto;">
            <div class="panel-heading">
                <span><strong>Chat Room: <?php echo $chatrow["chat_name"]; ?></strong></span>
                <div class="pull-right" style="margin-left:800px;">
                    <span id="user_details" style="font-size:18px;"><strong>Members:</strong><span class="badge"><?php echo mysqli_num_rows($r1); ?></span></span>
                    <!-- <a href="#delete_room" data-toggle="modal" class="btn btn-danger">Delete Room</a> -->
                    <a href="chat.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
                </div>
            </div>
            <div class="panel-body" style="margin-left:10px;">
                <span>Welcome to Chatroom</span><br>
                <span style="font-size:10px;"><i>Note: Avoid using foul language and hate speech to avoid banning of account</i></span>
                <div id="chat_area" style="max-height:320px; overflow-y:scroll;"></div>
                <div class="input-group" style="margin-top: 20px;">
                    <input type="text" class="form-control" placeholder="Type message..." id="chat_msg">
                    <span class="input-group-btn">
                        <button class="btn btn-success" type="submit" id="send_msg" value="<?php echo $id; ?>">
                            <span class="glyphicon glyphicon-comment"></span> Send
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="js\jquery-3.2.1.min.js"></script>
    <script>

        $(document).ready(function () {
            displayChat();

            $(document).on('click', '#send_msg', function () {
                if ($('#chat_msg').val() == "") {
                    alert('Please write message first');
                } else {
                    const id = <?php echo $id; ?>;
                    const msg = $('#chat_msg').val();
                    $.ajax({
                        type: "POST",
                        url: "send_message.php",
                        data: { msg: msg, id: id },
                        success: function () {
                            $('#chat_msg').val("");
                            displayChat();
                        }
                    });
                }
            });

            // Other event handlers remain unchanged...
        });

        function displayChat() {
            const id = <?php echo $id; ?>;
            $.ajax({
                url: 'fetch_chat.php',
                type: 'POST',
                async: false,
                data: { id: id, fetch: 1 },
                success: function (response) {
                    $('#chat_area').html(response);
                    $('#chat_area').scrollTop($('#chat_area')[0].scrollHeight);
                }
            });
        }

        setInterval(function () {
            displayChat();
        }, 3000);
    </script>
    <?php include('room_modal.php'); ?>
    <?php include('out_modal.php'); ?>
    <?php include('modal.php'); ?>
    <?php include('footer.php'); ?>

</body>
