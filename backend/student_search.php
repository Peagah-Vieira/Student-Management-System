<?php
$student_ID = filter_input(INPUT_GET, "student_id", FILTER_SANITIZE_NUMBER_INT);

$stm = $conn->query("SELECT * FROM class_sms WHERE status = '1'");
$db_class = $stm->fetchAll(PDO::FETCH_ASSOC);

$class_quantity = $conn->prepare("SELECT COUNT(ID) AS num_result FROM class_sms");
$class_quantity->execute();
$class_registers = $class_quantity->fetch(PDO::FETCH_ASSOC);

$stm = $conn->query("SELECT * FROM student_sms WHERE ID= '$student_ID' LIMIT 1");
$db_student = $stm->fetch(PDO::FETCH_ASSOC);
?>