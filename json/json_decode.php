<?php
//decodifica o json em um array
$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json);

print_r($data);
?>