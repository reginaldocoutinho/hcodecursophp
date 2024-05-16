<?php
// Escopo de Variável

$nome = "Glaucio";

function teste() {
    global $nome;
    echo $nome;
}

function teste2(){
    $nome = "João";
    echo $nome. " Agora no teste 2";
}

teste($nome);

teste2($nome);


?>