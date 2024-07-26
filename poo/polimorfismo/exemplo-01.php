<?php

abstract class Animal 
{

    public function Comunicar()
    {
        return "Som!";
    }

    public function Mover()
    {
        return "Anda";
    }
}

class Cachorro extends Animal
{
    public function Comunicar()
    {
        return "Late";
    }
}

class Gato extends Animal
{
    public function Comunicar()
    {
        return "Mia";
    }
}

class Passaro extends Animal
{
    public function Comunicar()
    {
        return "Canta";
    }

    public function Mover()
    {
        return "Voa e " . parent::mover();
    }
}

$lupita = new Cachorro();
echo "A Lupita: " . $lupita->Comunicar() . " e " . $lupita->Mover() . "<br/>";

$miomio = new Gato();
echo "O Miomio: " . $miomio->Comunicar() . " e " . $miomio->Mover() . "<br/>";

$maritaca = new Passaro();
echo "A Maritaca: " . $maritaca->Comunicar() . ", " . $maritaca->Mover();


?>