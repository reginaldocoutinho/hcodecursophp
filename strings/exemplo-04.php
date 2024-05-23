<?php
//str posicion

$frase ='A repetição é a mãe da retenção.';
var_dump($frase);
$palavra = 'mãe';
/* a  função abaixo está pegando a 
quantidade de caracteres até o final
da palavra mãe
*/
$q = strpos($frase, $palavra);
echo $q;

/* na variável abaixo está
recebendo o valor da variável $frase
até o valor passado da variável $q
neste caso 0 a 19
*/
$texto = substr($frase, 0, $q);

var_dump($texto);

/* Neste caso o ponto inicial é a a soma
do valor da frase cortada no caracter 19 + o valor
da variavel $q declarada no inicio chegando no 
valor inicial de 21 no ultimo parâmetro que está sendo
passado está o valor total da da frase que é 38
*/
$texto = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";
var_dump($texto);
?>