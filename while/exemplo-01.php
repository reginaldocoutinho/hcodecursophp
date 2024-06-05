<?php
$condicao = true;

while($condicao == true){
    $numero = rand(1, 10);
    if($numero === 3){
        echo "TRÊS!!";
        $condicao = false;
    }
    echo $numero . " ";
}

?>