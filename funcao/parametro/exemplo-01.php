<?php
// Como mostrado abaixo tem como passar o valor padrão
function ola($texto = "Mundo", $periodo="Bom dia!"){
        return "Olá $texto! $periodo<br>";

}
echo ola();
echo ola("João", "Boa tarde!");
echo ola("Pessoas", "Boa noite!");
?>