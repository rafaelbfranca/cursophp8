<?php 

namespace Sistema\NucleoDeClasses;

class Controlador
{
    /*O método construtor é executado automaticamente ao se instanciar a classe, podendo ter parâmetros ou não.
    Seus parâmetros podem ter ou não um valor padrão e podem ser obrigatórios ou opcionais.
    Para que o parâmetro tenha um valor padrão, basta atribuí-lo na sua declaração dentro dos parênteses. Se a atribuição for igual a null, o parâmetro se torna opcional.
    Exemplos:
    public function __construct(string $tema = 'tema')
    public function __construct(string $tema = null)
    */
    public function __construct(string $tema)
    {
        echo $tema;
    }
}
?>
