<?php
if(isset($_POST['delete'])){
    $id = $_POST['delete'];
    $cmd = $conn->prepare("DELETE FROM student_sms WHERE id = :id");
    $cmd->bindValue(":id", $id);
    $cmd->execute();
    header('Location: manage_student.php');
}
?>