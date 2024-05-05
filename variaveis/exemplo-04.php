<?php
// Variaveis Globais
/* O que está acontecendo a variavel $nome está 
recebendo um array do tipo $_GET que é uma variavel global
que está esperando vir de "query string" que vem
da url por exemplo tem o endereço site, seraparamos com
uma interrogação "?" e informamos o valor de "a", toda
a informação que vier de GET ou POST será do tipo texto
"STRING".
Exemplo:
 http://localhost/hcode/variaveis/exemplo-04.php?a=123

Para passar mais de uma variavel usa se o "E comercial"
o &.
Exemplo:

*/
/* esse (int) está convertendo o valor para inteiro
isso é chamado de cast
*/ 
$numero = (int)$_GET["numero"];

$numero0 = (int)$_GET['numero0'];

var_dump($numero, $numero0);

// Pegar ip do usuário
//$ip = $_SERVER['REMOTE_ADDR'];
$ip = $_SERVER['SCRIPT_NAME'];
echo $ip;
?>