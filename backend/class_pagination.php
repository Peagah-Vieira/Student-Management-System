<?php
$atual_page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT); //Page URL
$page = (!empty($atual_page)) ? $atual_page : 1;

$result_limit = 10; 
$begin = ($result_limit * $page) - $result_limit;

$register_quantity = $conn->prepare("SELECT COUNT(ID) AS num_result FROM class_sms");
$register_quantity->execute();
$registers = $register_quantity->fetch(PDO::FETCH_ASSOC);
$quantity = ceil($registers['num_result'] / $result_limit);

$maximum_link = 2;
?>