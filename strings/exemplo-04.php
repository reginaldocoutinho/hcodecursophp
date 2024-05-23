<?php
//str posicion

$frase ='A repetição é a mãe da retenção.';

$palavra = 'mãe';

$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);

var_dump($texto);

$texto = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";
var_dump($texto);
?>