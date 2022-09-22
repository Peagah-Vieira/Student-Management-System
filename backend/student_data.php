<?php
$pagina_atual = filter_input(INPUT_GET, "page", FILTER_SANITIZE_NUMBER_INT);
$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

$limite_resultado = 2;
$inicio = ($limite_resultado * $pagina) - $limite_resultado;

$stm = $conn->query("SELECT StudentName,StudentID,StudentEmail,StudentClass,StudentGender,AdmissionDate FROM student_sms LIMIT $inicio, $limite_resultado");
$db_student = $stm->fetchAll(PDO::FETCH_ASSOC);

$qnt_registros = $conn->prepare("SELECT COUNT(ID) AS num_result FROM student_sms");
$qnt_registros->execute();
$registros = $qnt_registros->fetch(PDO::FETCH_ASSOC);
$quantidade = ceil($registros['num_result'] / $limite_resultado);
?>