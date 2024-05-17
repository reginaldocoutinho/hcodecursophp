<?php
// Precedência de operador
/*
    Divisão e multiplicação primeiro que as operações basícas
    Para que seja realizada primeiro uma parte da conta use
    chaves (10 + 3) * 2 = 16
*/
$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 20;
var_dump($resultado);
?>