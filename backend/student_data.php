<?php
include_once('student_pagination.php');
$stm = $conn->query("SELECT ID,StudentName,StudentID,StudentEmail,StudentClass,StudentGender,AdmissionDate FROM student_sms LIMIT $begin, $result_limit");
$db_student = $stm->fetchAll(PDO::FETCH_ASSOC);
?>