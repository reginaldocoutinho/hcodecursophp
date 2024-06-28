<?php
// Passagem de parametros por valor
$a = 10;

function trocaValor($valor){
    $valor += 50;
    return $valor;
}

echo $a;
echo "<br>";
var_dump(trocaValor($a));


?>