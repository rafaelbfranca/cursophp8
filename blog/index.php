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
        include "./Sistema/NucleoDeClasses/Mensagem.php";
        echo "<hr>";

        include "./Sistema/NucleoDeClasses/Animal.php";
        include "./Sistema/NucleoDeClasses/Cachorro.php";

        
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
        echo "<hr>";

        echo 'Definição de constantes no arquivo configuracao.php:'.'<br>';
        /*
        echo CONSTANTE_STRING1.'<br>';
        echo CONSTANTE_STRING2.'<br>';
        echo CONSTANTE_INT1.'<br>';
        echo CONSTANTE_INT2.'<br>';
        */
        echo "<hr>";

        echo url('teste');
        echo "<hr>";

        //$meuArray = array();
        $meuArray = [
            'Nome'=>'Paulo',
            'Sobrenome'=>'Castro',
            'Nome de família'=>'Souza',
            'Ano Nasc.'=>'1970',
            'Mês Nasc.'=>'9',
            'Dia Nasc.'=>'21'
        ];
        
        echo 'Meu nome é '.$meuArray['Nome'].' '.$meuArray['Sobrenome'].' '.$meuArray['Nome de família'].'. '.'Eu nasci em '.$meuArray['Dia Nasc.'].'/'.$meuArray['Mês Nasc.'].'/'.$meuArray['Ano Nasc.'].'.';
        echo "<hr>";

        $cpf = '033.530.689-61';
        echo validarCpf($cpf).'<br>';
        var_dump(validarCpf($cpf));
        echo "<hr>";

        $msg = new Mensagem();//Instanciando uma classe.
        var_dump($msg);
        echo "<hr>";

        $bethoven = new Cachorro('2005/10/15','Bethoven');
        $bethoven->latir();
        echo "<hr>";
        $bethoven->idade();
        echo "<hr>";
        $bethoven->comer();

    ?>
</body>
</html>
