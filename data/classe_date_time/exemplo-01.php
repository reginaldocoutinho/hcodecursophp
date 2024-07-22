<?php

$dt = new DateTime();

$periodo = new DateInterval("P10D");


echo $dt->format("d/m/Y H:i:s");
$dt->add($periodo);
echo "<br>";
// format é um método da classe DateTime
echo $dt->format("d/m/Y H:i:s");

?>