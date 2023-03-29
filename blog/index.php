<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <?php
        //Arquivo index, responsável por iniciar o sistema.
        echo "<h1>Arquivo index.php</h1>";
        require_once "sistema/configuracao.php";
        echo "<br>";
        include "helpers.php";
        echo "<br><br>";
        echo saudacao();//Chamada da função existente no arquivo helpers.php.
        echo "<br><br>";
        echo resumirTexto();
    ?>
</body>
</html>
