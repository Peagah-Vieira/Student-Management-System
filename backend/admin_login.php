<?php
if(isset($_POST['username']) && isset($_POST['password'])){
  include_once('backend/db_connect.php');

  $username = $_POST['username'];  
  $password = $_POST['password'];

  $stm = $conn->query("SELECT Username,Password FROM admin_sms WHERE username = '$username' and password = '$password'");
  $db_admin = $stm->fetch(PDO::FETCH_ASSOC);

  if($username == isset($db_admin['Username']) && $password == isset($db_admin['Password'])){
    echo "<script type='text/javascript'>toastr.success('Login successfully, you will be redirected in 3 seconds!', 'Situation', {
        'closeButton': true,
        'debug': false,
        'newestOnTop': false,
        'progressBar': true,
        'positionClass': 'toast-bottom-left',
        'preventDuplicates': false,
        'onclick': null,
        'showDuration': '300',
        'hideDuration': '1000',
        'timeOut': '5000',
        'extendedTimeOut': '1000',
        'showEasing': 'swing',
        'hideEasing': 'linear',
        'showMethod': 'fadeIn',
        'hideMethod': 'fadeOut'
    });</script>"; 
    header("Refresh: 3;url=admin/dashboard.php");
  }
  else{
    echo "<script type='text/javascript'>toastr.error('Incorrect username or password!', 'Situation', {
        'closeButton': true,
        'debug': false,
        'newestOnTop': false,
        'progressBar': true,
        'positionClass': 'toast-bottom-left',
        'preventDuplicates': false,
        'onclick': null,
        'showDuration': '300',
        'hideDuration': '1000',
        'timeOut': '5000',
        'extendedTimeOut': '1000',
        'showEasing': 'swing',
        'hideEasing': 'linear',
        'showMethod': 'fadeIn',
        'hideMethod': 'fadeOut'
    });</script>"; 
  }
}
?>