<?php
function autoloader($nomeClasse){
    var_dump($nomeClasse);
    require_once(__DIR__ ."/abstrata/$nomeClasse.php");
}

spl_autoload_register('autoloader');

$carro = new DelRey();

$carro->acelerar(100);
?>