<?php
// FOREACH para cada

$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

//Array -- indice -- valor.
foreach($meses as $index => $mes){
    echo "Indice: ".$index."<br>";
    echo "O mês é: ".$mes."<br>";
}

?>