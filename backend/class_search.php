<?php
$class_ID = filter_input(INPUT_GET, "class_id", FILTER_SANITIZE_NUMBER_INT);
$stm = $conn->query("SELECT * FROM class_sms WHERE ID= '$class_ID' LIMIT 1");
$db_class = $stm->fetch(PDO::FETCH_ASSOC);
?>