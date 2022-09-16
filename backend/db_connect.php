<?php
$db_username = 'root';
$db_password = '';
    try{
        $conn = new PDO('mysql:host=localhost;dbname=SMS', $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<script>console.log('Conectado com Sucesso ao Banco de Dados')</script>";
    }
    catch(PDOException $e){
        $error_message = $e->getMessage();
        echo $error_message;
    }
?>