<?php
$stm = $conn->query("SELECT StudentName,StudentID,StudentEmail,StudentClass,StudentGender,AdmissionDate FROM student_sms");
$db_student = $stm->fetchAll(PDO::FETCH_ASSOC);
?>