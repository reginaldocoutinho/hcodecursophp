<?php

$name = "imagens";

if(!is_dir($name)){ //Verifica se existe um diretório com o nome passado
    mkdir($name);//Cria o diretório
    echo "Diretório $name criado com sucesso!";
}else{
    rmdir($name);//Remove o diretório
    echo "Já existe o diretório $name e foi removido!";
}


?>