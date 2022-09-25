<?php
$server = 'localhost';
$db_name = 'SMS';
$db_username = 'root';
$db_password = '';
    try{
        $conn = new PDO("mysql:host=$server;dbname=$db_name", $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<script>console.log('Conectado com Sucesso ao Banco de Dados')</script>";
    }
    catch(PDOException $e){
        $error_message = $e->getMessage();
        echo "An error has occurred:{$error_message}";
    }
?>