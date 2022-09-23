<?php
$class_quantity = $conn->prepare("SELECT COUNT(ID) AS num_result FROM class_sms");
$class_quantity->execute();
$class_registers = $class_quantity->fetch(PDO::FETCH_ASSOC);

$student_quantity = $conn->prepare("SELECT COUNT(ID) AS num_result FROM student_sms");
$student_quantity->execute();
$student_registers = $student_quantity->fetch(PDO::FETCH_ASSOC);

$active_class_quantity = $conn->prepare("SELECT COUNT(ID) AS num_result FROM class_sms WHERE status = '1'");
$active_class_quantity->execute();
$active_class_registers = $active_class_quantity->fetch(PDO::FETCH_ASSOC);

$active_student_quantity = $conn->prepare("SELECT COUNT(ID) AS num_result FROM student_sms WHERE status = '1'");
$active_student_quantity->execute();
$active_student_registers = $active_student_quantity->fetch(PDO::FETCH_ASSOC);
?>