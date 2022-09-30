<?php
//session_start();
//$user = $_SESSION['username'];
$stm = $conn->query("SELECT * FROM student_sms");
$db_student = $stm->fetch(PDO::FETCH_ASSOC);
?>