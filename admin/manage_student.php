<?php
include_once('../backend/db_connect.php');
include_once('../backend/student_data.php');
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
                        <h1 class="h3 mb-0 text-gray-800">Manage Student</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-sm-flex align-items-center mb-4">
                                        <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Classes</a>
                                    </div>
                                    <div class="table-responsive border rounded p-1">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="font-weight-bold text-dark">Student Name</th>
                                                    <th class="font-weight-bold text-dark">Student ID</th>
                                                    <th class="font-weight-bold text-dark">Student Email</th>
                                                    <th class="font-weight-bold text-dark">Student Class</th>
                                                    <th class="font-weight-bold text-dark">Student Gender</th>
                                                    <th class="font-weight-bold text-dark">Admissin Date</th>
                                                    <th class="font-weight-bold text-dark">Action</th>
                                                </tr>
                                            </thead>
                                            <?php foreach($db_student as $student){?>
                                            <tbody>
                                                <tr>
                                                    <th class="font-weight-light text-dark"><?=$student['StudentName']?></th>
                                                    <th class="font-weight-light text-dark"><?=$student['StudentID']?></th>
                                                    <th class="font-weight-light text-dark"><?=$student['StudentEmail']?>
                                                    </th>
                                                    <th class="font-weight-light text-dark"><?=$student['StudentClass']?></th>
                                                    <th class="font-weight-light text-dark"><?=$student['StudentGender']?></th>
                                                    <th class="font-weight-light text-dark"><?=$student['AdmissionDate']?></th>
                                                    <th class="font-weight-light text-dark">
                                                    <a href=""><i class="fa-regular fa-eye"></i></a>
                                                    || 
                                                    <a href="" onclick="return confirm('Do you really want to Delete ?');"><i class="fa-solid fa-trash"></i></a>
                                                    </th>
                                                </tr>
                                            </tbody>
                                            <?php }?>
                                        </table>
                                        <nav aria-label="Navegação de página exemplo">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="teste.php?page=1" aria-label="Anterior">Primeira</a></li>
                                            <?php
                                            for($pagina_anterior = $pagina - $maximo_link; $pagina_anterior <= $pagina - 1; $pagina_anterior++){
                                                if($pagina_anterior >= 1){
                                            ?>
                                            <li class="page-item"><a class="page-link" href="teste.php?page=<?=$pagina_anterior?>"><?=$pagina_anterior?></a></li>
                                            <?php }}?>
                                            <li class="page-item active"><a class="page-link" href="teste.php?page=<?=$pagina?>"><?=$pagina?></a></li>
                                            <?php 
                                            for($proxima_pagina = $pagina + 1; $proxima_pagina <= $pagina + $maximo_link; $proxima_pagina++){
                                                if($proxima_pagina <= $quantidade){
                                            ?>
                                            <li class="page-item"><a class="page-link" href="teste.php?page=<?=$proxima_pagina?>"><?=$proxima_pagina?></a></li>
                                            <?php }}?>
                                            <li class="page-item"><a class="page-link" href="teste.php?page=<?=$quantidade?>" aria-label="Anterior">Ultima</a></li>
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