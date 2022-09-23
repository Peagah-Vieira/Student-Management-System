<?php
$student_ID = filter_input(INPUT_GET, "student_id", FILTER_SANITIZE_NUMBER_INT);
$stm = $conn->query("SELECT * FROM student_sms WHERE ID= '$student_ID' LIMIT 1");
$db_student = $stm->fetch(PDO::FETCH_ASSOC);
?>