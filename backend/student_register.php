<?php
if(isset($_POST['studentName'],$_POST['studentEmail'],$_POST['studentClass'],$_POST['studentBirth'],$_POST['FatherName'],$_POST['MotherName'],$_POST['studentNumber'],$_POST['studentAlternateNumber'],$_POST['studentAddress'],$_POST['studentUsername'],$_POST['studentPassword'])){
    $studentName = filter_input(INPUT_POST,"studentName", FILTER_SANITIZE_STRING);
    $studentEmail = filter_input(INPUT_POST,"studentEmail", FILTER_SANITIZE_STRING);
    $studentClass = filter_input(INPUT_POST,"studentClass", FILTER_SANITIZE_STRING);
    $studentBirth = filter_input(INPUT_POST,"studentBirth", FILTER_SANITIZE_STRING);
    $studentID = filter_input(INPUT_POST,"studentID", FILTER_SANITIZE_STRING);
    $FatherName = filter_input(INPUT_POST,"FatherName", FILTER_SANITIZE_STRING);
    $MotherName = filter_input(INPUT_POST,"MotherName", FILTER_SANITIZE_STRING);
    $studentNumber = filter_input(INPUT_POST,"studentNumber", FILTER_SANITIZE_STRING);
    $studentAlternateNumber = filter_input(INPUT_POST,"studentAlternateNumber", FILTER_SANITIZE_STRING);
    $studentAddress = filter_input(INPUT_POST,"studentAddress", FILTER_SANITIZE_STRING);
    $studentUsername= filter_input(INPUT_POST,"studentUsername", FILTER_SANITIZE_STRING);
    $studentPassword = filter_input(INPUT_POST,"studentPassword", FILTER_SANITIZE_STRING);
    $stm = $conn-> prepare('INSERT INTO student_sms(StudentName,StudentEmail,StudentClass,StudentBirth,StudentID,FatherName,MotherName,ContactNumber,AlternateNumber,Address,Username,Password) VALUES (:StudentName,:StudentEmail,:StudentClass,:StudentBirth,:StudentID,:FatherName,:MotherName,:ContactNumber,:AlternateNumber,:Address,:Username,:Password)'); 
    $stm->bindParam('StudentName', $studentName);
    $stm->bindParam('StudentEmail', $studentEmail);
    $stm->bindParam('StudentClass', $studentClass);
    $stm->bindParam('StudentBirth', $studentBirth);
    $stm->bindParam('StudentID', $studentID);
    $stm->bindParam('FatherName', $FatherName);
    $stm->bindParam('MotherName', $MotherName);
    $stm->bindParam('ContactNumber', $studentNumber);
    $stm->bindParam('AlternateNumber', $studentAlternateNumber);
    $stm->bindParam('Address', $studentAddress);
    $stm->bindParam('Username', $studentUsername);
    $stm->bindParam('Password', $studentPassword);
    $stm->execute();
}