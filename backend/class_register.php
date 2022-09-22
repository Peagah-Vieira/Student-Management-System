<?php
if(isset($_POST['class'],$_POST['unity'],$_POST['opening_Date'],$_POST['conclusion_Date'])){
    $class = filter_input(INPUT_POST,"class");
    $unity = filter_input(INPUT_POST,"unity");
    $opening_Date = filter_input(INPUT_POST,"opening_Date");
    $conclusion_Date = filter_input(INPUT_POST,"conclusion_Date");
    $stm = $conn->prepare('INSERT INTO class_sms(Class,Unity,Opening_Date,Conclusion_Date) VALUES (:Class,:Unity,:Opening_Date,:Conclusion_Date)');
    $stm->bindParam(':Class', $class);
    $stm->bindParam(':Unity', $unity);
    $stm->bindParam(':Opening_Date', $opening_Date);
    $stm->bindParam(':Conclusion_Date', $conclusion_Date);
    $stm->execute();
}
?>