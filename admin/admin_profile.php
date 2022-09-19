<?php
include_once('../backend/db_connect.php');
include_once('../backend/admin_data.php');
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
                        <h1 class="h3 mb-0 text-gray-800"><?=$db_admin['Username']?> Profile</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-12">
                                <div class="card rounded-3 text-black">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mt-4">
                                                <img src="../Assets/img/undraw_profile.svg" style="width:128px;height:128px;">
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Admin Name</label>
                                                        <input type="text" id="form2Example11" class="form-control" value="<?=$db_admin['AdminName']?>" disabled/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Username</label>
                                                        <input type="text" id="form2Example11" class="form-control" value="<?=$db_admin['Username']?>" disabled/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Contact Number</label>
                                                        <input type="email" id="form2Example11" class="form-control" value="<?=$db_admin['MobileNumber']?>" disabled/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Email</label>
                                                        <input type="email" id="form2Example11" class="form-control" value="<?=$db_admin['Email']?>" disabled/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Admin Registration Date</label>
                                                        <input type="text" id="form2Example11" class="form-control" value="<?=$db_admin['AdminRegDate']?>" disabled/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="../index.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <script src="../assets/vendor/jquery/jquery.min.js"></script>
            <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
            <script src="https://kit.fontawesome.com/0527a7a8a4.js" crossorigin="anonymous"></script>
            <script src="../assets/js/sb-admin-2.js"></script>
            <script src="../assets/vendor/chart.js/Chart.min.js"></script>
</body>

</html>