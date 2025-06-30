<?php
include_once('header.php');
include_once("../dboperation.php");
$obj = new dboperation();
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Welcome Admin</h3>
                        <h6 class="font-weight-normal mb-0">All systems are running smoothly!</h6>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <!-- Additional dropdowns can be placed here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin transparent">
                <div class="row">
                    <div class="col-md-4 mb-4 stretch-card">
                        <div class="card card-tale">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <p class="mb-4">TOTAL NUMBER OF STUDENTS REGISTERED</p>
                                <?php
                                $sql = "SELECT COUNT(user_id) AS count FROM tbl_student";
                                $res = $obj->executequery($sql);
                                $dis = mysqli_fetch_array($res);
                                ?>
                                <p class="fs-30 mb-2"><?php echo $dis['count']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4 stretch-card">
                        <div class="card card-light-danger">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <p class="mb-4">TOTAL NUMBER OF TEACHERS REGISTERED</p>
                                <?php
                                $sql = "SELECT COUNT(faculty_id) AS count FROM tbl_faculty";
                                $res = $obj->executequery($sql);
                                $dis = mysqli_fetch_array($res);
                                ?>
                                <p class="fs-30 mb-2"><?php echo $dis['count']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4 stretch-card">
                        <div class="card card-light-blue">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <p class="mb-4">TOTAL NUMBER OF COLLEGES REGISTERED</p>
                                <?php
                                $sql = "SELECT COUNT(college_id) AS count FROM tbl_college";
                                $res = $obj->executequery($sql);
                                $dis = mysqli_fetch_array($res);
                                ?>
                                <p class="fs-30 mb-2"><?php echo $dis['count']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-4 stretch-card">
                        <div class="card card-dark-blue">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <p class="mb-4">TOTAL NUMBER OF DOCUMENTS UPLOADED</p>
                                <?php
                                $sql = "SELECT COUNT(document_id) AS count FROM tbl_document WHERE status = 'Uploaded'";
                                $res = $obj->executequery($sql);
                                $dis = mysqli_fetch_array($res);
                                ?>
                                <p class="fs-30 mb-2"><?php echo $dis['count']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4 stretch-card">
                        <div class="card card-dark-blue">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <p class="mb-4">TOTAL NUMBER OF DOCUMENTS ACCEPTED</p>
                                <?php
                                $sql = "SELECT COUNT(document_id) AS count FROM tbl_document WHERE Status = 'Accept'";
                                $res = $obj->executequery($sql);
                                $dis = mysqli_fetch_array($res);
                                ?>
                                <p class="fs-30 mb-2"><?php echo $dis['count']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4 stretch-card">
                        <div class="card card-dark-blue">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <p class="mb-4">TOTAL NUMBER OF CHATROOM ADDED</p>
                                <?php
                                $sql = "SELECT COUNT(chatroomid) AS count FROM chatroom";
                                $res = $obj->executequery($sql);
                                $dis = mysqli_fetch_array($res);
                                ?>
                                <p class="fs-30 mb-2"><?php echo $dis['count']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('footer.php'); ?>
</div>
