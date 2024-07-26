<?php

class Documento {
    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($valor)
    {
        $this->numero = $valor;
    }
}

class CPF extends Documento {
    
    public function validar():bool
    {
        //validação CPF
        return true;
    }

}

$doc = new CPF();

$doc->setNumero('11111111111-11');

var_dump($doc->validar());

echo "</br>";

echo $doc->getNumero();

?>