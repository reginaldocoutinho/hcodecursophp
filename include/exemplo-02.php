<?php
//Utilizando o require
/*
    Qual a diferença do include e do require?
        O require ele obriga que o arquivo exista
    e que o arquivo esteja funcionando perfeitamente.
    O include tenta funcionar independente do funcionamento
    e ele tem mais funcionalidade, ele tem um diretório includepath
    ele é configurado na instalação do php, esse tipo de uso
    é melhor em sistemas intranet(Apenas locais).
    Sempre melhor usar o require pelas validações que ele faz

require "funcoes_aritmeticos.php";

require_once faz com que traga apenas uma vez
os arquivos que está sendo solicitado neste caso
para uso das funções.
require_once "funcoes_aritmeticos.php";
*/
require_once "funcoes_aritmeticos.php";
$resultado = somar(10, 20);

echo 'Resultado soma: '.$resultado;
?>