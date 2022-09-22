<?php
if(isset($_POST['StudentID'])){
    $studentID = $_POST['StudentID'];
    $stm = $conn->query("SELECT * FROM student_sms WHERE StudentID = '$studentID'");
    $db_student = $stm->fetch(PDO::FETCH_ASSOC);
}
?>