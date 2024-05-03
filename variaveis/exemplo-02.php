<?php
// Seção 3
// 14. Conhecendo os Tipos de Dados em PHP.
// Varíavel não pode começar com número.
// E o único caractere especial aceito é underscore.
/* 
----------------------
   Comentário de bloco 
----------------------
*/
//Cuidado com nomes reservados exemplo $this

$anoNascimento = 1998;
$nomeCompleto = "";
$nome1 = "João";

$sobrenome = "Rangel";

//concactenando usando dote para isso e separando por aspas duplas com espaço.
$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;
exit;//Para execução do código aqui
echo $nome1;

echo "<br/>";

unset($nome1);//Tirou da memório deixou ela indefinida

// isset verifica se ela existe exibir a variavel $nome
if (isset($nome1)) {
    echo $nome1;
}

?>