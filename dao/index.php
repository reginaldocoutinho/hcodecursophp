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
// $usuario = new Usuario();
// $usuario->login("Reginaldo Coutinho", "123456");
// echo $usuario;


// New User
// $aluno = new Usuario("Aluno 2", "alaskda");
// $aluno->setLogin("aluno");
// $aluno->setSenha("1234");
// $aluno->insert();
// echo $aluno;

//Update user
$usuario = new Usuario();

$usuario->loadById(8);
$usuario->update("Professor","prof1234");

echo $usuario;

?>