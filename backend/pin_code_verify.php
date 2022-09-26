<?php
if(isset($_POST['send'])){
  include_once('../backend/pin_code_generator.php');
  session_start();

  $pin_code_teste = $_POST['pin_code'];
  if($pin_code_teste = $_SESSION['pin']){
    header("Location: reset_password.php");
  }
}
?>