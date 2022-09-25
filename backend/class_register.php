<?php
if(isset($_POST['class'],$_POST['opening_Date'],$_POST['conclusion_Date'])){
    $verification = $_POST['class'];
    $query = $conn->query("SELECT Class FROM class_sms WHERE class = '$verification'");
    $db_verification = $query->fetch(PDO::FETCH_ASSOC);

    if($verification == $db_verification['Class']){
        echo "<script type='text/javascript'>toastr.warning('Class already registered!', 'Situation', {
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
    else{
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
}
?>