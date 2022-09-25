<?php
$stm = $conn->query("SELECT * FROM class_sms WHERE status = '1'");
$db_class = $stm->fetchAll(PDO::FETCH_ASSOC);

$class_quantity = $conn->prepare("SELECT COUNT(ID) AS num_result FROM class_sms Where status = '1'");
$class_quantity->execute();
$class_registers = $class_quantity->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['studentName'],$_POST['studentEmail'],$_POST['studentClass'],$_POST['studentGender'],$_POST['studentBirth'],$_POST['studentID'],$_POST['FatherName'],$_POST['MotherName'],$_POST['studentNumber'],$_POST['studentAlternateNumber'],$_POST['studentAddress'],$_POST['studentUsername'],$_POST['studentPassword'])){
    foreach($db_class as $class){
        $teste = $class['Class'];
        $stm = $conn->query("SELECT * FROM class_sms WHERE status = '1' and Class = '$teste'");
        $db_teste = $stm->fetch(PDO::FETCH_ASSOC);
        $verify = $db_teste['Class'];
        $student_quantity = $conn->prepare("SELECT COUNT(ID) AS num_result FROM student_sms WHERE StudentClass = '$verify'");
        $student_quantity->execute();
        $student_registers = $student_quantity->fetch(PDO::FETCH_ASSOC);
        if($student_registers['num_result'] == 4){
            $class_status = 0;
            $stm = $conn->prepare("UPDATE class_sms SET status = :Status WHERE Class = '$teste'"); 
            $stm->bindParam(':Status', $class_status);
            $stm->execute();
        }
    }
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
    $studentUsername= filter_input(INPUT_POST,"studentUsername",FILTER_DEFAULT);
    $studentPassword = password_hash(filter_input(INPUT_POST,"studentPassword"),PASSWORD_DEFAULT);
    $status = 1;
    if($studentGender == 'Male'){
        $StudentPhoto = "../student_images/undraw_male_avatar.svg";
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
        echo "<script type='text/javascript'>toastr.success('Successfully registered student!', 'Situation', {
            'closeButton': true,
            'debug': false,
            'newestOnTop': false,
            'progressBar': true,
            'positionClass': 'toast-bottom-left',
            'preventDuplicates': false,
            'onclick': null,
            'showDuration': '300',
            'hideDuration': '1000',
            'timeOut': '5000',
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut'
        });</script>"; 
    }
    else if($studentGender == 'Female'){
        $StudentPhoto = "../student_images/undraw_female_avatar.svg";
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
        echo "<script type='text/javascript'>toastr.success('Successfully registered student!', 'Situation', {
            'closeButton': true,
            'debug': false,
            'newestOnTop': false,
            'progressBar': true,
            'positionClass': 'toast-bottom-left',
            'preventDuplicates': false,
            'onclick': null,
            'showDuration': '300',
            'hideDuration': '1000',
            'timeOut': '5000',
            'extendedTimeOut': '1000',
            'showEasing': 'swing',
            'hideEasing': 'linear',
            'showMethod': 'fadeIn',
            'hideMethod': 'fadeOut'
        });</script>"; 
    }
}