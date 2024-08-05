<?php

require_once("config.php");

$pessoa = new Usuario();

$pessoa->loadById(1);

echo $pessoa;
// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM usuario");

// echo json_encode($usuarios);


?>