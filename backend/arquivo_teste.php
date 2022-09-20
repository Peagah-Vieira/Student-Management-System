<?php
    if(isset($_FILES['arquivo'])){
        $arquivo = $_FILES['arquivo'];

        if($arquivo['error']){
            die("Falha ao enviar arquivo");
        }

        $pasta = "student_images/";
        $nomeDoArquivo = $arquivo['name'];
        $novoNomeDoArquivo = uniqid();
        $extension = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));
        $deu_certo = move_uploaded_file($arquivo['tmp_name'], $pasta . $novoNomeDoArquivo . "." . $extension);

        if($extension != "jpg" && $extension != "png"){
            die("Tipo de arquivo não aceito");
        }
        if($deu_certo){
            echo "<p>Arquivo enviado com sucesso!</p>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype="multipart/form-data" method="post">
        <label for="">Selecione o Arquivo</label>
        <input type="file" name="arquivo"> <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>