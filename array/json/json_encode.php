<?php
$pessoas = array();

array_push($pessoas, array(
 "nome"=>"João",
 "idade"=>20
));

array_push($pessoas, array(
    "nome"=>"Glaucio",
    "idade"=>25
   ));
//json_encode transforma o array em um json que pode ser usado para comunicar este código com outras aplicações.
echo json_encode($pessoas);
?>