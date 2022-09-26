<?php
if(isset($_POST['send'])){
    if($_POST['password'] == $_POST['confirmPassword']){
        include_once('../backend/db_connect.php');
        session_start();

        $password = password_hash(filter_input(INPUT_POST,"password"),PASSWORD_DEFAULT);
        $username = $_SESSION['username'];
        $email = $_SESSION['email'];

        $stm = $conn->prepare("UPDATE admin_sms SET Password = :Password WHERE Username = '$username' and Email = '$email'"); 
        $stm->bindParam(':Password', $password);
        $stm->execute();

        session_destroy();
        header("Location: ../admin_login.php");
    }
    else{
        echo "<script>alert('Different Passwords')</script>";
    }
}
?>