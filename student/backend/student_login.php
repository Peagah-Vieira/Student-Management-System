<?php
if(isset($_POST['username']) && isset($_POST['password'])){
  include_once('backend/db_connect.php');
  session_start();  
  
  $stm = $conn->query("SELECT * FROM student_sms");
  $db_all = $stm->fetch(PDO::FETCH_ASSOC);

  $username = $_POST['username'];  
  $password = $_POST['password'];

  $_SESSION['username'] = $username;  

  if($username != $db_all['Username']){
    echo "<script type='text/javascript'>toastr.error('User not found!', 'Situation', {
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
  else{
    $stm = $conn->query("SELECT * FROM admin_sms WHERE username = '$username'");
    $db_student = $stm->fetch(PDO::FETCH_ASSOC);

    $hash     = $db_student['Password'];
    $verify   = password_verify($password, $hash);
    
    if($verify){
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
        header("Refresh: 3;url=student/dashboard.php");
    }
    else{
        echo "<script type='text/javascript'>toastr.error('Incorrect Username or Password!', 'Situation', {
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
}
?>