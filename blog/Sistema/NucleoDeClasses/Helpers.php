<?php
    namespace Sistema\NucleoDeClasses;

    //Arquivo de funções auxiliares.
    echo "Arquivo de funções incluído com sucesso.";

    class Helpers
    {
        public static function saudacao():string
        {
            $hora = date('H');//Este comando está associado à configuração de timezone no arquivo configuracao.php.
            /*
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
            */

            $saudacao = match(true)
            {
                $hora >= 0 && $hora < 6 => 'Boa madrugada!',
                $hora >= 6 && $hora < 12 => 'Bom dia!',
                $hora >= 12 && $hora < 18 => 'Boa tarde!',
                $hora >= 18 && $hora < 24 => 'Boa noite!',
                default => 'Hora inválida.'
            };

            return $saudacao;
        }

        /**
         * Resume um texto até um limite de caracteres informado.
         * 
         * @param string $texto Recebe o texto a ser resumido.
         * @param int $limite Recebe a quantidade de caracteres.
         * @param string $continue (Opcional) Recebe o que será concatenado ao final do texto resumido.
         * @return string Retorna o texto resumido.
         */
        public static function resumirTexto(string $texto, int $limite, string $continue = '...'):string
        {
            $textoLimpo = trim($texto);//trim() remove todos os espaços existentes no início ou no final da string. Não remove espaços extras no meio da string.

            //md_strlen() conta todos os caracteres da string, incluindo espaços em qualquer posição, daí a importância de utilizar a função trim() para limpar espaços desnecessários no início e no final da string.

            if (mb_strlen($textoLimpo) <= $limite) {
                return $textoLimpo;
            } else {
                return mb_substr($textoLimpo,0,$limite).$continue;//Substring de $textoLimpo do início até o $limite, concatenado com $continue.
            }
        }

        public static function formatarValor(float $valor):string
        {
            return number_format($valor,2,',','.');
        }

        /**
         * Conta o tempo decorrido a partir de uma data informada.
         * 
         * @param string $data Recebe a data informada.
         * @return string Retorna o tempo decorrido da data informada até o momento atual.
         */
        public static function contarTempo(string $data):string
        {
            $agora = strtotime(date('Y-m-d H:i:s'));
            $tempo = strtotime($data);
            $diferenca = $agora - $tempo;

            $segundos = $diferenca;
            $minutos = round($diferenca/60);
            $horas = round($diferenca/3600);
            $dias = round($diferenca/86400);
            $semanas = round($diferenca/604800);
            $meses = round($diferenca/2592000);
            $anos = round($diferenca/31536000);

            
            if ($segundos < 60) {
                return $segundos < 0 ? 'A data é futura.' : "Agora.";
            } elseif ($minutos < 60) {
                return $minutos == 1 ? 'Há pelo menos 1 minuto.' : 'Há pelo menos '.$minutos.' minutos.';
            } elseif ($horas < 24) {
                return $horas == 1 ? 'Há pelo menos 1 hora.' : 'Há pelo menos '.$horas.' horas.';
            } elseif ($dias < 7) {
                return $dias == 1 ? 'Há pelo menos 1 dia.' : 'Há pelo menos '.$dias.' dias.';
            } elseif ($semanas < 5) {
                return $semanas == 1 ? 'Há pelo menos 1 semana.' : 'Há pelo menos '.$semanas.' semanas.';
            } elseif ($meses < 12) {
                return $meses == 1 ? 'Há pelo menos 1 mês.' : 'Há pelo menos '.$meses.' meses.';
            } else {
                return $anos == 1 ? 'Há pelo menos 1 ano.' : 'Há pelo menos '.$anos.' anos';
            }
        }

        public static function url(string $url):string
        {
            //var_dump($_SERVER); faz o echo da variável global $_SERVER. Útil para identificar os nomes dos atributos que se deseja utilizar o valor.

            //$servidor = filter_input(INPUT_SERVER , 'SERVER_NAME'); Essa linha foi apresentada no vídeo da aula 032 do curso para resgatar o atributo SERVER_NAME da variável global $_SERVER, mas não funcionou.
            $servidor = $_SERVER['SERVER_NAME'];//Essa linha foi a forma encontrada que funcionou.
            $ambiente = ($servidor == 'localhost' ? URL_DEV : URL_PRODUCAO);

            if (str_starts_with($url , '/')) {
                return $ambiente.$url;
            }
            return $ambiente.'/'.$url;
        }

        public static function limparNumero(string $numero):string
        {
            return preg_replace('/[^0-9]/','',$numero);
        }
        
        public static function validarCpf(string $cpf):bool
        {
            //Dentro da própria classe, seus métodos devem ser chamados com "self::".
            $cpf = self::limparNumero($cpf);

            if (mb_strlen($cpf) != 11 or preg_match('/(\d)\1{10}/',$cpf))
            {
                return false;
            }

            for ($t = 9; $t < 11; $t++)
            { 
                for ($d = 0, $c = 0; $c < $t; $c++) { 
                    $d += $cpf[$c]*(($t+1)-$c);
                }
                $d = ((10*$d)%11)%10;
                if ($cpf[$c] != $d) {
                    return false;
                }
            }
            return true;
        }
    }
?>
