<?php

require_once("conexao.php");

$conn->beginTransaction();


$stmt = $conn->prepare("DELETE FROM usuario where id = ?");


$id=7;
$stmt->execute(array($id));

//$conn->rollback();
$conn->commit();
echo "Deletado com sucesso";
?>