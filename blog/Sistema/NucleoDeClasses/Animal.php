<?php 
namespace Sistema\NucleoDeClasses; 
class Animal
{
    public string $dataNascimento;

    public function __construct($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function comer()
    {
        echo 'O animal está comendo.';
    }
}

?>
