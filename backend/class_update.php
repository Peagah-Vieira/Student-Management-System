<?php
if(isset($_POST['send'])){
    $opening_Date = filter_input(INPUT_POST,"opening_Date");
    $conclusion_Date = filter_input(INPUT_POST,"conclusion_Date");
    $status = $_POST['status'];
    $stm = $conn->prepare("UPDATE class_sms SET Opening_Date = :Opening_Date, Conclusion_Date = :Conclusion_Date, status = :Status WHERE ID = $class_ID"); 
    $stm->bindParam(':Opening_Date', $opening_Date);
    $stm->bindParam(':Conclusion_Date', $conclusion_Date);
    $stm->bindParam(':Status', $status);
    $stm->execute();
    header("location: class_information.php?class_id=$class_ID");
}
?>