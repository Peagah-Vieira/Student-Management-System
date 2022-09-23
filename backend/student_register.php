<?php
$stm = $conn->query("SELECT * FROM class_sms WHERE status = '1'");
$db_class = $stm->fetchAll(PDO::FETCH_ASSOC);
if(isset($_POST['studentName'],$_POST['studentEmail'],$_POST['studentClass'],$_POST['studentGender'],$_POST['studentBirth'],$_POST['studentID'],$_POST['FatherName'],$_POST['MotherName'],$_POST['studentNumber'],$_POST['studentAlternateNumber'],$_POST['studentAddress'],$_POST['studentUsername'],$_POST['studentPassword'])){
    $studentName = filter_input(INPUT_POST,"studentName");
    $studentEmail = filter_input(INPUT_POST,"studentEmail",FILTER_SANITIZE_EMAIL);
    $studentClass = filter_input(INPUT_POST,"studentClass",FILTER_DEFAULT);
    $studentGender = $_POST['studentGender'];
    $studentBirth = filter_input(INPUT_POST,"studentBirth",FILTER_DEFAULT);
    $studentID = filter_input(INPUT_POST,"studentID",FILTER_DEFAULT);
    $FatherName = filter_input(INPUT_POST,"FatherName",FILTER_DEFAULT);
    $MotherName = filter_input(INPUT_POST,"MotherName",FILTER_DEFAULT);
    $studentNumber = filter_input(INPUT_POST,"studentNumber",FILTER_DEFAULT);
    $studentAlternateNumber = filter_input(INPUT_POST,"studentAlternateNumber",FILTER_DEFAULT);
    $studentAddress = filter_input(INPUT_POST,"studentAddress",FILTER_DEFAULT);
    $studentUsername= filter_input(INPUT_POST,"studentUsername",FILTER_DEFAULT);
    $studentPassword = password_hash(filter_input(INPUT_POST,"studentPassword"),PASSWORD_DEFAULT);
    //Photo_Path to DataBase
    $image = $_FILES['image'];
    $pasta = "../student_images/";
    $imageName = $image['name'];
    $imageNewName = uniqid();
    $extension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
    $deu_certo = move_uploaded_file($image['tmp_name'], $pasta . $imageNewName . "." . $extension);
    $StudentPhoto = $pasta . $imageNewName . "." . $extension;
    $stm = $conn-> prepare('INSERT INTO student_sms(StudentName,StudentEmail,StudentClass,StudentGender,StudentBirth,StudentID,StudentPhoto,FatherName,MotherName,ContactNumber,AlternateNumber,Address,Username,Password) VALUES (:StudentName,:StudentEmail,:StudentClass,:StudentGender,:StudentBirth,:StudentID,:StudentPhoto,:FatherName,:MotherName,:ContactNumber,:AlternateNumber,:Address,:Username,:Password)'); 
    $stm->bindParam('StudentName', $studentName);
    $stm->bindParam('StudentEmail', $studentEmail);
    $stm->bindParam('StudentClass', $studentClass);
    $stm->bindParam('StudentGender', $studentGender);
    $stm->bindParam('StudentBirth', $studentBirth);
    $stm->bindParam('StudentID', $studentID);
    $stm->bindParam('StudentPhoto', $StudentPhoto);
    $stm->bindParam('FatherName', $FatherName);
    $stm->bindParam('MotherName', $MotherName);
    $stm->bindParam('ContactNumber', $studentNumber);
    $stm->bindParam('AlternateNumber', $studentAlternateNumber);
    $stm->bindParam('Address', $studentAddress);
    $stm->bindParam('Username', $studentUsername);
    $stm->bindParam('Password', $studentPassword);
    $stm->execute();
}