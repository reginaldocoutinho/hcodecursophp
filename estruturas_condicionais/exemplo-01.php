<?php
/*
*/

$idade =3;

$idade_bebe = 3;
$idade_crianca = 12;
$idade_adulto = 18;
$idade_idoso = 65;


if($idade <= $idade_bebe){
    echo "Você é um bebê.";
}else if($idade < $idade_crianca ) {
    echo "Você é uma criança.";
}else if($idade < 18){
    echo "Você é um adolescente.";
}else if($idade >= $idade_adulto && $idade < $idade_idoso){
    echo "Você é um adulto.";
}else{
    echo "Você é um idoso.";
}

//Operador Ternario

echo "<br>";
// ? ENTÃO exibe a primeira mensagem
// : SE NÃO exibe a segunda mensagem
echo ($idade < $idade_adulto)?"Menor de idade":"Maior de idade";

?>