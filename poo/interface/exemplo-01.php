<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

class Carro implements Veiculo {

    public function acelerar($velocidade)
    {
        echo "O veículo acelerou até: " . $velocidade . "km/h </br></br>";
    }

    public function freiar($velocidade)
    {
        echo "O veículo freiou até: " . $velocidade . "km/h </br>";
    }

    public function trocarMarcha($marcha)
    {
        echo "O veículo engatou a marcha:" . $marcha;
    }
}

$civic = new Carro();

$civic->trocarMarcha(1);
$civic->acelerar(20);
$civic->freiar(50);
?>