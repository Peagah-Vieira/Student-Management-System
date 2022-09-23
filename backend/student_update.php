<?php
if(isset($_POST['studentName'])){
    $studentName = filter_input(INPUT_POST,"studentName");
    $stm = $conn-> prepare("UPDATE `student_sms` SET `StudentName` = $studentName WHERE `student_sms`.`ID` = 40"); 
    $stm->bindParam(':StudentName', $studentName);
    $stm->execute();
}
?>