<?php
    //Arquivo de funções auxiliares.
    echo "Arquivo de funções incluído com sucesso.";

    function saudacao():string
    {
        $hora = date('H');//Este comando está associado à configuração de timezone no arquivo configuracao.php.
        
        if ($hora >= 0 && $hora < 6) {
            $saudacao = 'Boa madrugada!';
        } elseif ($hora >= 6 && $hora < 12) {
            $saudacao = 'Bom dia!';
        } elseif ($hora >= 12 && $hora < 18) {
            $saudacao = 'Boa tarde!';
        } elseif ($hora >= 18 && $hora < 24) {
            $saudacao = 'Boa noite!';
        } else {
            $saudacao = 'Hora inválida.';
        }

        return $saudacao;
    }

    function resumirTexto(string $texto, int $limite, string $continue = '...'):string
    {
        $textoLimpo = trim($texto);//trim() remove todos os espaços existentes no início ou no final da string. Não remove espaços extras no meio da string.

        //md_strlen() conta todos os caracteres da string, incluindo espaços em qualquer posição, daí a importância de utilizar a função trim() para limpar espaços desnecessários no início e no final da string.

        if (mb_strlen($textoLimpo) <= $limite) {
            return $textoLimpo;
        } else {
            return mb_substr($textoLimpo,0,$limite).$continue;//Substring de $textoLimpo do início até o $limite, concatenado com $continue.
        }
    }
?>
