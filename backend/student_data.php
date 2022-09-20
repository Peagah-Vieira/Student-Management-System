<?php
$url = $_SERVER['PHP_SELF'];
$maximo = 10; 
$pagina = isset($_GET['pagina']) ? ($_GET['pagina']) : '1'; 
$inicio = $pagina - 1; 
$inicio = $maximo * $inicio;
$previous = $pagina - 1;        
$next = $pagina + 1;

echo "<script>console.log('$pagina')</script>";
echo "<script>console.log('$inicio')</script>";
echo "<script>console.log('$url')</script>";

$stm = $conn->query("SELECT StudentName,StudentID,StudentEmail,StudentClass,StudentGender,AdmissionDate FROM student_sms LIMIT $inicio, $maximo");
$db_student = $stm->fetchAll(PDO::FETCH_ASSOC);
?>