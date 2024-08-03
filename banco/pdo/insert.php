<?php

require_once("conexao.php");


$stmt = $conn->prepare("INSERT INTO usuario(login,senha)VALUES(:LOGIN,:PASSWORD)");

$login = "JH Prudencio";
$password = "aaaaaa";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido ok";
?>