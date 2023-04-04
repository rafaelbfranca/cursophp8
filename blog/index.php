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
        include "./Sistema/NucleoDeClasses/EnumStatus.php";

        
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

        echo "Trabalhando com classes e herança.<br>";
        $bethoven = new Cachorro('2005/10/15','Bethoven');
        $bethoven->latir();
        echo "<hr>";
        $bethoven->idade();
        echo "<hr>";
        $bethoven->comer();

        echo "<hr>";
        //Exemplo de uso do try/catch. Exibe o erro e permite que o codigo termine corretamente.
        echo "Trabalhando com try/catch<br>";
        try {
            echo 1 / 0;
          } catch (Throwable $e) {
            echo $e->getMessage();
          }
        
        echo "<hr>";
        echo "Trabalhando com datas. Função strtotime().<br>";
        echo strtotime('now');
        echo "<hr>";
        echo strtotime('4 May 2020');
        echo "<hr>";
        echo strtotime('+1 day');
        echo "<hr>";
        echo strtotime('+1 month');
        echo "<hr>";
        echo strtotime('last Sunday');
        echo "<hr>";

        echo "Trabalhando com enum.<br>";
        try {
            $bethoven->status = EnumStatus::DORMINDO;
        } catch (Throwable $e) {
            echo $e->getMessage();
        }
        //var_dump($bethoven->status);
        //echo EnumStatus::DORMINDO->name;
        //echo $bethoven->status->name;
        echo $bethoven->nome." está ".$bethoven->status->name.".";
        
        echo "<hr>";
        
    ?>
    <form method="POST">
        <input type="text" name="name" />
        <input type="submit" />
    </form>
    <?php
    //A função isset() verifica se um parâmetro está definido no objeto.
    //No exemplo abaixo verifica se o atributo name está definido em $_GET.
        if (isset($_POST['name'])) {
            echo '<p>The name is ' . $_POST['name'];
        }
    ?>
</body>
</html>
