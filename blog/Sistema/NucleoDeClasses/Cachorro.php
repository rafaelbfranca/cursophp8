<?php

class Cachorro extends Animal
{
    public string $nome;
    
    //O construtor da classe filha deve ter todos os atributos
    //do construtor da classe pai, mais os que forem exigitos pela classe filha.
    public function __construct($dataNascimento,$nome)
    {
        $this->dataNascimento = $dataNascimento;
        $this->nome = $nome;
    }

    public function latir()
    {
        echo $this->nome.' latiu!';
    }

    public function idade()
    {
        $hoje = strtotime(date('Y/m/d'));
        $tempo = strtotime($this->dataNascimento);
        $diferenca = $hoje - $tempo;
        $anos = round($diferenca/31536000);

        $texto = match(true)
        {
            $anos == 0 => $this->nome.' ainda não tem 1 ano.',
            $anos == 1 => $this->nome.' tem '.$anos.' ano.',
            $anos > 1 => $this->nome.' tem '.$anos.' anos.',
            default => 'Data de nascimento inválida.'
        };

        echo $texto;
        
    }
}

?>
