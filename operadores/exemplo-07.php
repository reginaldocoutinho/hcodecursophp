<?php
// Incremento e Decremento
/*
    ++ soma mais 1
    -- subrai do valor 1
    a ordem onde coloca esse incremento ou decremento 
    influência no momento que será incrementado
    ex:
     $a++; será incrementado o valor depois então se
     exibir a variável vai estar com o valor inicial na
     primeira mas se estiver pré-incrementando
    ++$a; dessa forma desde a primeira execução já
    vai ter sofrido a incrementação
*/
$a = 10;

echo ++$a;

echo "<br>";

echo $a;
?>