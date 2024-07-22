<?php

class Carro {
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($valor){
        $this->modelo = $valor;
    }

    public function getMotor():float{
        return $this->motor;
    }

    public function setMotor($valor){
        $this->motor = $valor;
    }

    public function getAno():int{
        return $this->ano;
    }

    public function setAno($valor){
        $this->ano = $valor;
    }

    public function exibir(){
        return array(
            'modelo'=>$this->getModelo(),
            'motor'=>$this->getMotor(),
            'ano'=>$this->getAno()

        );
    }
}

$gol = new Carro();

$gol->setModelo('Gol');
$gol->setMotor('1.8');
$gol->setAno('1991');

var_dump($gol->exibir());

?>