<?php
require_once("conexao.php");


$stmt = $conn->prepare("DELETE FROM usuario where id = :ID");

$id = 6;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Removido o usuario do id: " . $id;

?>