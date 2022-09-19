<?php
if(isset($_POST['studentName'],$_POST['studentEmail'],$_POST['studentClass'],$_POST['studentBirth'],$_POST['FatherName'],$_POST['MotherName'],$_POST['studentNumber'],$_POST['studentAlternateNumber'],$_POST['studentAddress'],$_POST['studentUsername'],$_POST['studentPassword'])){
    $studentName = filter_input(INPUT_POST,"studentName",FILTER_DEFAULT);
    $studentEmail = filter_input(INPUT_POST,"studentEmail",FILTER_SANITIZE_EMAIL);
    $studentClass = filter_input(INPUT_POST,"studentClass",FILTER_DEFAULT);
    $studentGender = $_POST['StudentGender'];
    $studentBirth = filter_input(INPUT_POST,"studentBirth",FILTER_DEFAULT);
    $studentID = filter_input(INPUT_POST,"studentID",FILTER_DEFAULT);
    $FatherName = filter_input(INPUT_POST,"FatherName",FILTER_DEFAULT);
    $MotherName = filter_input(INPUT_POST,"MotherName",FILTER_DEFAULT);
    $studentNumber = filter_input(INPUT_POST,"studentNumber",FILTER_DEFAULT);
    $studentAlternateNumber = filter_input(INPUT_POST,"studentAlternateNumber",FILTER_DEFAULT);
    $studentAddress = filter_input(INPUT_POST,"studentAddress",FILTER_DEFAULT);
    $studentUsername= filter_input(INPUT_POST,"studentUsername",FILTER_DEFAULT);
    $studentPassword = password_hash(filter_input(INPUT_POST,"studentPassword"),PASSWORD_DEFAULT);
    $stm = $conn-> prepare('INSERT INTO student_sms(StudentName,StudentEmail,StudentClass,StudentGender,StudentBirth,StudentID,FatherName,MotherName,ContactNumber,AlternateNumber,Address,Username,Password) VALUES (:StudentName,:StudentEmail,:StudentClass,:StudentGender,:StudentBirth,:StudentID,:FatherName,:MotherName,:ContactNumber,:AlternateNumber,:Address,:Username,:Password)'); 
    $stm->bindParam('StudentName', $studentName);
    $stm->bindParam('StudentEmail', $studentEmail);
    $stm->bindParam('StudentClass', $studentClass);
    $stm->bindParam('StudentGender', $studentGender);
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