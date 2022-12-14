<?php
if(isset($_POST['send'])){
    $studentName = filter_input(INPUT_POST,"studentName",FILTER_DEFAULT);
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
    $status = $_POST['status'];
    if($studentGender == 'Male'){
        $StudentPhoto = "../student_images/undraw_male_avatar.svg";
        $stm = $conn-> prepare("UPDATE student_sms SET StudentName = :StudentName, StudentEmail = :StudentEmail, StudentClass = :StudentClass, StudentGender = :StudentGender, StudentBirth = :StudentBirth, StudentID = :StudentID, StudentPhoto = :StudentPhoto, FatherName = :FatherName, MotherName = :MotherName, ContactNumber = :StudentNumber, AlternateNumber = :StudentAlternateNumber, Address = :StudentAddress, Username = :StudentUsername, Password = :StudentPassword, status = :Status WHERE ID = $student_ID");
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
        header("location: student_information.php?student_id=$student_ID");
    }
    else if($studentGender == 'Female'){
        $StudentPhoto = "../student_images/undraw_female_avatar.svg";
        $stm = $conn-> prepare("UPDATE student_sms SET StudentName = :StudentName, StudentEmail = :StudentEmail, StudentClass = :StudentClass, StudentGender = :StudentGender, StudentBirth = :StudentBirth, StudentID = :StudentID, StudentPhoto = :StudentPhoto, FatherName = :FatherName, MotherName = :MotherName, ContactNumber = :StudentNumber, AlternateNumber = :StudentAlternateNumber, Address = :StudentAddress, Username = :StudentUsername, Password = :StudentPassword, status = :Status WHERE ID = $student_ID");
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
        header("location: student_information.php?student_id=$student_ID");
    }
}
?>