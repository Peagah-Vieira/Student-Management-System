<?php
include_once('../backend/db_connect.php');
include_once('../backend/class_delete.php');
include_once('../backend/class_data.php');
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
                        <h1 class="h3 mb-0 text-gray-800">Manage Class</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                <div class="d-sm-flex align-items-center mb-4">
                                        <a href="manage_student.php" class="text-dark ml-auto mb-3 mb-sm-0"> View all Student</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="font-weight-bold text-dark">Class Name</th>
                                                    <th class="font-weight-bold text-dark">Opening Date</th>
                                                    <th class="font-weight-bold text-dark">Conclusion Date</th>
                                                    <th class="font-weight-bold text-dark">Number of Student</th>
                                                    <th class="font-weight-bold text-dark">Status</th>
                                                    <th class="font-weight-bold text-dark">Action</th>
                                                </tr>
                                            </thead>
                                            <?php foreach($db_class as $class){
                                                    $status = $class['status']; 
                                                    $class_verification = $class['Class']; 
                                                
                                                    $stm = $conn->query("SELECT * FROM class_sms WHERE status = '$status' and Class = '$class_verification'");
                                                    $db_teste = $stm->fetch(PDO::FETCH_ASSOC);

                                                    $verify = $db_teste['Class']; 
                                                    
                                                    $student_quantity = $conn->prepare("SELECT COUNT(ID) AS num_result FROM student_sms WHERE StudentClass = '$verify'");
                                                    $student_quantity->execute();
                                                    $student_registers = $student_quantity->fetch(PDO::FETCH_ASSOC);?>
                                            <tbody>
                                                <tr>
                                                    <th class="font-weight-light text-dark"><?=$class['Class']?></th>
                                                    <th class="font-weight-light text-dark"><?=$class['Opening_Date']?>
                                                    </th>
                                                    <th class="font-weight-light text-dark"><?=$class['Conclusion_Date']?></th>
                                                    <th class="font-weight-light text-dark"><?=$student_registers['num_result']?></th>
                                                    <th class="font-weight-light text-dark"><?php if($class['status'] == 1){echo "Active";}else{echo "Inactive"; }?></th>
                                                    <form action="" method="POST">
                                                    <th class="font-weight-light text-dark">
                                                    <a href="class_information.php?class_id=<?=$class['ID']?>"><button class="btn btn-primary" type="button" style="margin:3px;"><i class="fa-solid fa-eye"></i></i></button></a>                                                   
                                                    <input type="text" value="<?php echo $class['ID']?>" name="delete" hidden>
                                                    </button>
                                                    <button class="btn btn-primary" type="submit" onclick="return confirm('Are you sure you want to delete this item?');" style="margin:3px;"><i class="fa-solid fa-trash" style="width:16px;height:16px;"></i></button>
                                                    </th>
                                                    </form>
                                                </tr>
                                            </tbody>
                                            <?php }?>
                                        </table>
                                        <nav aria-label="Navega????o de p??gina exemplo">
                                            <ul class="pagination">
                                                <!--First Page-->
                                                <li class="page-item"><a class="page-link" href="manage_class.php?page=1" aria-label="Anterior">First</a></li>
                                                <!--Undo Page-->
                                                <?php
                                                for($undo_page = $page - $maximum_link; $undo_page <= $page - 1; $undo_page++){
                                                    if($undo_page >= 1){
                                                ?>
                                                <li class="page-item"><a class="page-link" href="manage_class.php?page=<?=$undo_page?>"><?=$undo_page?></a></li>
                                                <?php }}?>
                                                <!--Atual Page-->
                                                <li class="page-item active"><a class="page-link" href="manage_class.php?page=<?=$page?>"><?=$page?></a></li>
                                                <!--Forward Page-->
                                                <?php 
                                                for($forward_page = $page + 1; $forward_page <= $page + $maximum_link; $forward_page++){
                                                    if($forward_page <= $quantity){
                                                ?>
                                                <li class="page-item"><a class="page-link" href="manage_class.php?page=<?=$forward_page?>"><?=$forward_page?></a></li>
                                                <?php }}?>
                                                <!--Last Page-->
                                                <li class="page-item"><a class="page-link" href="manage_class.php?page=<?=$quantity?>" aria-label="Anterior">Last</a></li>
                                            </ul>
                                        </nav>
                                    </div>
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
                <script src="../assets/js/sb-admin-2.js"></script>
                <script src="https://kit.fontawesome.com/0527a7a8a4.js" crossorigin="anonymous"></script>
                <script src="../assets/vendor/chart.js/Chart.min.js"></script>
</body>

</html>