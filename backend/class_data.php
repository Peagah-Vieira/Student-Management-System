<?php
include_once('class_pagination.php');
$stm = $conn->query("SELECT * FROM class_sms LIMIT $begin, $result_limit");
$db_class = $stm->fetchAll(PDO::FETCH_ASSOC);
?>