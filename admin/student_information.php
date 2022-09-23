<?php
include_once('../backend/db_connect.php');
include_once('../backend/student_search.php');
$class_quantity = $conn->prepare("SELECT COUNT(ID) AS num_result FROM class_sms");
$class_quantity->execute();
$class_registers = $class_quantity->fetch(PDO::FETCH_ASSOC);
include_once('../backend/student_update.php');
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
                        <h1 class="h3 mb-0 text-gray-800"><?=$db_student['StudentName']?> Profile</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-12">
                                <div class="card rounded-3 text-black">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mt-4">
                                                <img src="<?=$db_student['StudentPhoto']?>" class="rounded-circle" style="width:192px;height:192px;">
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Student Name</label>
                                                        <input type="text" id="form2Example11" class="form-control" name="studentName" value="<?=$db_student['StudentName']?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Student Email</label>
                                                        <input type="text" id="form2Example11" class="form-control" name="studentEmail" value="<?=$db_student['StudentEmail']?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example13">Student Class</label>
                                                        <select name="studentClass" value="" class="form-control">
                                                        <?php 
                                                        if($class_registers['num_result'] == 0){?>
                                                            <option value="">No Return Values</option>
                                                        <?php }
                                                        else{?>
                                                        <option value="<?=$db_student['StudentClass']?>">Choose Class</option>
                                                        <?php foreach($db_class as $class){?>
                                                            <option value="<?=$class['Class']?>"><?=$class['Class']?></option>
                                                        <?php }}?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark">Gender</label>
                                                        <select name="studentGender" value="" class="form-control">
                                                            <option value="<?=$db_student['StudentGender']?>">Choose Gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Student Birth</label>
                                                        <input type="date" id="form2Example11" class="form-control" name="studentBirth" value="<?=$db_student['StudentBirth']?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Student ID</label>
                                                        <input type="text" id="form2Example11" class="form-control" name="studentID" value="<?=$db_student['StudentID']?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark">Student Photo</label>
                                                        <input type="file" name="image" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Father Name</label>
                                                        <input type="text" id="form2Example11" class="form-control" name="FatherName" value="<?=$db_student['FatherName']?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Mother Fame</label>
                                                        <input type="text" id="form2Example11" class="form-control" name="MotherName" value="<?=$db_student['MotherName']?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Contact Number</label>
                                                        <input type="text" id="form2Example11" class="form-control" name="studentNumber" value="<?=$db_student['ContactNumber']?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Alternative Contact Number</label>
                                                        <input type="text" id="form2Example11" class="form-control" name="studentAlternateNumber" value="<?=$db_student['AlternateNumber']?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Student Address</label>
                                                        <input type="text" id="form2Example11" class="form-control" name="studentAddress" value="<?=$db_student['Address']?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Username</label>
                                                        <input type="text" id="form2Example11" class="form-control" name="studentUsername" value="<?=$db_student['Username']?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Password</label>
                                                        <input type="text" id="form2Example11" class="form-control" name="studentPassword" value="<?=$db_student['Password']?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Situação</label>
                                                        <select name="status" value="" class="form-control">
                                                            <?php if($db_student['status'] == 1){?>
                                                            <option value="1">Ativo</option>
                                                            <option value="0">Inativo</option>
                                                            <?php }else{?>
                                                            <option value="0">Inativo</option>
                                                            <option value="1">Ativo</option>
                                                            <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <button class="btn btn-primary mb-3 ml-3" type="submit" name="send">UPDATE</button>
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