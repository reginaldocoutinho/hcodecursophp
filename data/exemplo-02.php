<?php
$ts = strtotime("2001-09-11");
$diaAtual = strtotime("now");
$diaSeguinte = strtotime("+1 day");
$semanaSeguinte = strtotime("+1 week");
echo '<br>';
echo date("l, d/m/Y",$ts);
echo '<br>';
echo 'Dia Atual: ';
echo date("l, d/m/Y",$diaAtual);
echo '<br>';
echo 'Dia Seguinte: ';
echo date("l, d/m/Y",$diaSeguinte);
echo '<br>';
echo 'Depois de uma semana: ';
echo date("l, d/m/Y",$semanaSeguinte);
?>