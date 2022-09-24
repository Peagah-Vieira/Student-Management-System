<?php
session_start();
include_once('../backend/db_connect.php');
include_once('../backend/student_register.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Dashboard | SMS</title>
    <link rel="icon" href="../Assets/img/favicon.ico" type="image/x-icon">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include_once('templates/sidebar.php');?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include_once('templates/topbar.php');?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Register Student</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-12">
                                <div class="card rounded-3 text-black">
                                    <form enctype="multipart/form-data" method="POST">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Student Name</label>
                                                        <input type="text" id="form2Example11" class="form-control" name="studentName" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example12">Student Email</label>
                                                        <input type="text" id="form2Example12" class="form-control" name="studentEmail" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example13">Student Class</label>
                                                        <select name="studentClass" value="" class="form-control" required>
                                                        <?php 
                                                        if($class_registers['num_result'] == 0){?>
                                                            <option value="">No Return Values</option>
                                                        <?php }
                                                        else{?>
                                                        <option value="">Choose Class</option>
                                                        <?php foreach($db_class as $class){?>
                                                            <option value="<?=$class['Class']?>"><?=$class['Class']?></option>
                                                        <?php }}?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark">Gender</label>
                                                        <select name="studentGender" value="" class="form-control" required>
                                                            <option value="">Choose Gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example15">Date of Birth</label>
                                                        <input type="date" id="form2Example15" class="form-control" name="studentBirth" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example16">Student ID</label>
                                                        <input type="text" id="form2Example16" class="form-control" name="studentID" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark">Student Photo</label>
                                                        <input type="file" name="image" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body font-weight-medium text-dark">
                                                    <h3>Parents/Guardian's details</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example17">Father's Name</label>
                                                        <input type="text" id="form2Example17" class="form-control" name="FatherName" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example18">Mother's Name</label>
                                                        <input type="text" id="form2Example18" class="form-control" name="MotherName" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example19">Contact Number</label>
                                                        <input type="text" id="form2Example19" class="form-control" name="studentNumber" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example20">Alternate Contact Number</label>
                                                        <input type="text" id="form2Example20" class="form-control" name="studentAlternateNumber" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example21">Address</label>
                                                        <input type="text" id="form2Example21" class="form-control" name="studentAddress" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body font-weight-medium text-dark">
                                                    <h3>Login details</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example22">Username</label>
                                                        <input type="text" id="form2Example22" class="form-control" name="studentUsername" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example23">Password</label>
                                                        <input type="password" id="form2Example23" class="form-control" name="studentPassword" required/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <button class="btn btn-primary mb-3 ml-3" type="submit">REGISTER</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <!-- End of Page Wrapper -->

            <?php include_once('templates/scroll_to_top.php');?>
            <?php include_once('templates/modal_logout.php');?>
            <script src="../assets/vendor/jquery/jquery.min.js"></script>
            <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
            <script src="https://kit.fontawesome.com/0527a7a8a4.js" crossorigin="anonymous"></script>
            <script src="../assets/js/sb-admin-2.js"></script>
            <script src="../assets/vendor/chart.js/Chart.min.js"></script>
</body>

</html>