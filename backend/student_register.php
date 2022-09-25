<?php
$stm = $conn->query("SELECT * FROM class_sms WHERE status = '1'");
$db_class = $stm->fetchAll(PDO::FETCH_ASSOC);

$class_quantity = $conn->prepare("SELECT COUNT(ID) AS num_result FROM class_sms");
$class_quantity->execute();
$class_registers = $class_quantity->fetch(PDO::FETCH_ASSOC);

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
    if($studentGender == 'Male'){
        $StudentPhoto = "../student_images/undraw_male_avatar.svg";
        $status = 1;
        $stm = $conn-> prepare('INSERT INTO student_sms(StudentName,StudentEmail,StudentClass,StudentGender,StudentBirth,StudentID,StudentPhoto,FatherName,MotherName,ContactNumber,AlternateNumber,Address,Username,Password,status) VALUES (:StudentName,:StudentEmail,:StudentClass,:StudentGender,:StudentBirth,:StudentID,:StudentPhoto,:FatherName,:MotherName,:ContactNumber,:AlternateNumber,:Address,:Username,:Password,:status)'); 
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
        $stm->bindParam('status', $status);
        $stm->execute();
    }
    else{
        $StudentPhoto = "../student_images/undraw_female_avatar.svg";
        $status = 1;
        $stm = $conn-> prepare('INSERT INTO student_sms(StudentName,StudentEmail,StudentClass,StudentGender,StudentBirth,StudentID,StudentPhoto,FatherName,MotherName,ContactNumber,AlternateNumber,Address,Username,Password,status) VALUES (:StudentName,:StudentEmail,:StudentClass,:StudentGender,:StudentBirth,:StudentID,:StudentPhoto,:FatherName,:MotherName,:ContactNumber,:AlternateNumber,:Address,:Username,:Password,:status)'); 
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
        $stm->bindParam('status', $status);
        $stm->execute();
    }

}