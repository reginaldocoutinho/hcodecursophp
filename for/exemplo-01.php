<?php
//Laço de repetição
/*for = utilizado como um contador
/ foreach = um laço de repetição de um array
while */

for ($i = 0; $i <= 1000; $i+=5){
//inicio --- até -- e operador incremental
    if($i >= 200 && $i <= 800) continue;
        echo $i . "<br>";

    if($i === 900) break;

}
?>