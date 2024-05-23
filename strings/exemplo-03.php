<?php

$empresa = "Hcode";

/*  Primeiro parametro o que está querendo trocar
    Segundo parâmetro passa o valor que vai substituir
    Terceiro parâmetro qual  alvo da alteração
*/
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo $empresa;

?>