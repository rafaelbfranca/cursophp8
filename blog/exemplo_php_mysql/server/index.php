<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = $_POST["firstName"] ?? "Nome";
        echo "<p>Buscou por $nome.</p>";//Usando aspas simples, não reconheceu a variável $nome.
        echo "<hr>";

        require_once "./Classes/conecta.php";

        echo "<hr>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>    
</body>
</html>
