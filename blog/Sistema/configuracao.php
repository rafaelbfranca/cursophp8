<?php
    //Arquivo responsável pelas configurações.
    echo "Arquivo de configuração incluído com sucesso.";

    date_default_timezone_set('America/Sao_Paulo');//Feita esta configuração, basta criar uma variável que receba a função date() com a formatação desejada. No arquivo helpers.php existe uma variável $hora usando a função date().

    //Formas de declarar constantes:
    /*
    const CONSTANTE_STRING1 = 'constante string 1';
    const CONSTANTE_INT1 = 15;
    
    define('CONSTANTE_STRING2' , 'constante string 2');
    define('CONSTANTE_INT2' , 20);
    */

    define('URL_PRODUCAO' , 'https://producao.com');
    define('URL_DEV' , 'http://localhost');

?>
