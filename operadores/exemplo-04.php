<?php
/* Operadores de comparação maior >, menor <, 
maior ou igual >=, menor ou igual <=,
de igualdade == e de diferente !=,
operador de igualdade de identidade confirma não só o valor,
mas também o tipo, se forem identicos retorna True.
operador de diferente de identidade confirma se não são identicos

*/

$a = 30;

$b = 55;

echo "O número " . $a . " é maior que " . $b . "? <br>";
var_dump($a > $b);
echo "</br></br>";
echo "O número " . $a . " é menor que " . $b . "? <br>";
var_dump($a < $b);

echo "</br></br>";
echo "Os números " . $a . " e " . $b . " são Iguais? <br>";
var_dump($a == $b);

echo "</br></br>";
echo "Os número " . $a . " e " . $b . " são diferentes? <br>";
var_dump($a != $b);
?>