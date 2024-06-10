<?php
/*
Função sem o return é uma subtarafa
no caso apenas um código que precisa 
ser executado varias vezes como no
exemplo abaixo:
function ola(){
    echo "Hello World!<br>";
}
*/
function ola(){
    return "Hello World!<br>";
}
echo ola();
$frase = ola();

echo strlen($frase);
?>