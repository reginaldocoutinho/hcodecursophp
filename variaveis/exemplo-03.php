<?php
//Tipos de varíaveis
//Basicos string, int, float e boolean
$nome = "Hcode";
$site = 'www.hcode.com.br';

$numero = 1998;
$salario = 5500.99;
$bloqueado = false;
////////////////////////////////
//Compostos array e objeto
$frutas = array("abacaxi", "laranja", "manga");
//print_r($frutas);// exibindo o array completo
echo "<br/>";
//echo $frutas[1];// acessando um indice do array

$nascimento = new DateTime(); //Vai pegar data atual
echo "<br/>";
//var_dump($nascimento);

// Especiais resource e null
//resource
$arquivo = fopen("exemplo-03.php", "r"); 

//var_dump($arquivo);

$nulo = null;
$vazio = " ";

var_dump($nulo);
var_dump($vazio);

?>