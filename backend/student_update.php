<?php
if(isset($_POST['send'])){
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
    $studentUsername = filter_input(INPUT_POST,"studentUsername",FILTER_DEFAULT);
    $studentPassword = password_hash(filter_input(INPUT_POST,"studentPassword"),PASSWORD_DEFAULT);
    //Photo_Path to DataBase
    $image = $_FILES['image'];
    $pasta = "../student_images/";
    $imageName = $image['name'];
    $imageNewName = uniqid();
    $extension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
    $deu_certo = move_uploaded_file($image['tmp_name'], $pasta . $imageNewName . "." . $extension);
    $StudentPhoto = $pasta . $imageNewName . "." . $extension;
    $status = $_POST['status'];
    $stm = $conn-> prepare("UPDATE student_sms SET StudentName = :StudentName, StudentEmail = :StudentEmail, StudentClass = :StudentClass, StudentGender = :StudentGender,
     StudentBirth = :StudentBirth, StudentID = :StudentID, StudentPhoto = :StudentPhoto, FatherName = :FatherName, MotherName = :MotherName, ContactNumber = :StudentNumber, 
     AlternateNumber = :StudentAlternateNumber, Address = :StudentAddress, Username = :StudentUsername, Password = :StudentPassword, status = :Status WHERE ID = 40"); 
    $stm->bindParam(':StudentName', $studentName);
    $stm->bindParam(':StudentEmail', $studentEmail);
    $stm->bindParam(':StudentClass', $studentClass);
    $stm->bindParam(':StudentGender', $studentGender);
    $stm->bindParam(':StudentBirth', $studentBirth);
    $stm->bindParam(':StudentID', $studentID);
    $stm->bindParam(':StudentPhoto', $StudentPhoto);
    $stm->bindParam(':FatherName', $FatherName);
    $stm->bindParam(':MotherName', $MotherName);
    $stm->bindParam(':StudentNumber', $studentNumber);
    $stm->bindParam(':StudentAlternateNumber', $studentAlternateNumber);
    $stm->bindParam(':StudentAddress', $studentAddress);
    $stm->bindParam(':StudentUsername', $studentUsername);
    $stm->bindParam(':StudentPassword', $studentPassword);
    $stm->bindParam(':Status', $status);
    $stm->execute();
    header("location: manage_student.php");
}
?>