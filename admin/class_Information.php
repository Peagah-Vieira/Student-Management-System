<?php
include_once('../backend/db_connect.php');
include_once('../backend/class_search.php');
include_once('../backend/class_update.php');
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
                        <h1 class="h3 mb-0 text-gray-800"><?=$db_class['Class']?> Class</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-12">
                                <div class="card rounded-3 text-black">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Number of Student</label>
                                                        <input type="text" id="form2Example11" class="form-control" name="studentQuantity" value="<?=$student_registers['num_result']?>" disabled/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Opening Date</label>
                                                        <input type="date" id="form2Example11" class="form-control" name="opening_Date" value="<?=$db_class['Opening_Date']?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Conclusion Date</label>
                                                        <input type="date" id="form2Example11" class="form-control" name="conclusion_Date" value="<?=$db_class['Conclusion_Date']?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    <div class="form-outline mb-2">
                                                        <label class="form-label font-weight-medium text-dark" for="form2Example11">Situa????o</label>
                                                        <select name="status" value="" class="form-control">
                                                            <?php if($db_class['status'] == 1){?>
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                            <?php }else{?>
                                                            <option value="0">Inactive</option>
                                                            <option value="1">Active</option>
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