<?php
include_once('pagination.php');
$stm = $conn->query("SELECT StudentName,StudentID,StudentEmail,StudentClass,StudentGender,AdmissionDate FROM student_sms LIMIT $begin, $result_limit");
$db_student = $stm->fetchAll(PDO::FETCH_ASSOC);
?>