<?php
if(isset($_POST['username'],$_POST['email'])){
    include_once('backend/db_connect.php');
  
    $username = $_POST['username'];  
    $email    = $_POST['email'];
  
    $stm = $conn->query("SELECT Username,Email FROM admin_sms WHERE Username = '$username' and Email = '$email'");
    $db_admin = $stm->fetch(PDO::FETCH_ASSOC);
  
    if($username == isset($db_admin['Username']) && $email == isset($db_admin['Email'])){
    include_once('backend/pin_code_send.php');

    session_start();

    $_SESSION['pin'] = $pin_code;
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;

    echo "<script>alert('Pin Code sent to your email')</script>";
    
    header("Refresh:0; url=admin/pin_code.php");
    }
    else{
      echo "<script>alert('Something went Wrong')</script>";
    }
}
?>