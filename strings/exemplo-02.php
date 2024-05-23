<?php

$nome = "João Rangel";

//Função para deixar em caixa alta
$nome = strtoupper($nome);

echo $nome;

echo "<br>";

//Caixa baixa
$nome = strtolower($nome);

echo "<br>";

echo $nome;

echo "<br>";

//Apenas a primeira letra da frase
echo ucfirst($nome);

echo "<br>";
//Primeira letra de cada palavra
echo ucwords($nome);
?>