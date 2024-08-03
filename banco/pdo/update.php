<?php

require_once("conexao.php");

$stmt = $conn->prepare("UPDATE usuario SET login= :LOGIN, senha = :PASSWORD WHERE id = :ID");

$id=5;
$login="Lupita P";
$password="auau";
$stmt->bindParam(":ID",$id);
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();
echo "Update SUCESSO";
?>