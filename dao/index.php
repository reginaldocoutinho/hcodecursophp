<?php

require_once("config.php");

// $sql = new Sql();
// $usuarios = $sql->select("SELECT * FROM usuario");
// echo json_encode($usuarios);

// $pessoa = new Usuario();

// User
//$pessoa->loadById(1);
// echo $pessoa;


//User list
// $lista = Usuario::getList();
// echo json_encode($lista);

//Load user list search for login
// $search = Usuario::search("o");
// echo json_encode($search);

//Validation Login and password
$usuario = new Usuario();
$usuario->login("Reginaldo Coutinho", "123456");


echo $usuario;

?>