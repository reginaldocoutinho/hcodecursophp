<?php
//Herança

class Pessoa {

    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){
        echo $this->nome. "<br/>";
        echo $this->idade. "<br/>";
        echo $this->senha. "<br/>";
    }
}

class Programador extends Pessoa {
    public function verDados(){
        echo "Métodos da Classe: ". get_class($this) . "<br/>";
        echo $this->nome. "<br/>";
        echo $this->idade. "<br/>";
        echo $this->senha. "<br/>";
    }

}

$objeto = new Programador();

//echo $objeto->nome . "<br/><br/>";

$objeto->verDados();
?>