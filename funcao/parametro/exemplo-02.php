<?php
function ola(){
    $argumentos = func_get_args();
    //função que pode receber varios pametros ou não
    return $argumentos;
}

var_dump(ola("Bom dia!"));
?>