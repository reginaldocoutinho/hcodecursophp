<?php
// Passagem de parametros por referência
$a = 10;

function trocaValor(&$valor){
    $valor += 50;
    return $valor;
}



var_dump(trocaValor($a));
echo "<br>";
var_dump(trocaValor($a));
echo "<br>";
echo $a;

?>