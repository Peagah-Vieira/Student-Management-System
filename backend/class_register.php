<?php
if(isset($_POST['class'],$_POST['opening_Date'],$_POST['conclusion_Date'])){
    $class = filter_input(INPUT_POST,"class");
    $opening_Date = filter_input(INPUT_POST,"opening_Date");
    $conclusion_Date = filter_input(INPUT_POST,"conclusion_Date");
    $status = 1;
    $stm = $conn->prepare('INSERT INTO class_sms(Class,Opening_Date,Conclusion_Date,status) VALUES (:Class,:Opening_Date,:Conclusion_Date,:status)');
    $stm->bindParam(':Class', $class);
    $stm->bindParam(':Opening_Date', $opening_Date);
    $stm->bindParam(':Conclusion_Date', $conclusion_Date);
    $stm->bindParam(':status', $status);
    $stm->execute();
}
?>