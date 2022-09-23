<?php
$class_ID = filter_input(INPUT_GET, "class_id", FILTER_SANITIZE_NUMBER_INT);

$stm = $conn->query("SELECT * FROM class_sms WHERE ID= '$class_ID' LIMIT 1");
$db_class = $stm->fetch(PDO::FETCH_ASSOC);

$verify = $db_class['Class'];

$student_quantity = $conn->prepare("SELECT COUNT(ID) AS num_result FROM student_sms WHERE StudentClass = '$verify'");
$student_quantity->execute();
$student_registers = $student_quantity->fetch(PDO::FETCH_ASSOC);


?>