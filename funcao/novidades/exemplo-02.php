<?php
function soma(int ...$valores):string{
// os dois pontos e o tipo após a declaração dos parametros força o tipo
    return array_sum($valores);
};

echo var_dump(soma(2,2));
echo "<br>";
// Se tentar passar um valor decimal ele vai 
//converter para int pois estava configurado na funcao para receber valores inteiros
echo soma(2,3.2);
?>