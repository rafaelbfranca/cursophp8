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
        echo "<hr>";
        require_once "sistema/configuracao.php";
        echo "<hr>";
        include "helpers.php";
        echo "<hr>";
        echo saudacao();//Chamada da função existente no arquivo helpers.php.
        echo "<hr>";
        
        $texto = 'Texto para resumir vindo de uma variável.';

        echo resumirTexto($texto, 25);
        echo "<hr>";

        var_dump($texto);//Comando util para debugar objetos, pois exibe no navegador os detalhes do objeto passado como parâmetro.
        echo "<hr>";

        echo formatarValor(6000);
        echo "<hr>";

        echo contarTempo('2023-03-31 16:45:50');
    ?>
</body>
</html>
