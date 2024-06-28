<?php
function soma(int ...$valores){

    return array_sum($valores);
};

echo soma(2,2);
echo "<br>";
// Se tentar passar um valor decimal ele vai 
//converter para int pois estava configurado na funcao para receber valores inteiros
echo soma(2,3.2);
?>