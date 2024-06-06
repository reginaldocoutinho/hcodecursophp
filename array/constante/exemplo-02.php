<?php
//Constantes com um array
//Não pode ter espaço no nome da constante
define("BANCO_DE_DADOS",[
    '127.0.0.01',
    'root',
    'password',
    'test'
]);
//Se quiser que a constante não seja case sensitive passar o valor true depois de uma virgula

print_r(BANCO_DE_DADOS);
?>