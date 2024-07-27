<?php

$conn = new mysqli("localhost","root", "", "dbphp7", 3307);

if ($conn->connect_error)
{
    echo "Error: " . $conn->connect_error;    
}


$stmt = $conn->prepare("INSERT INTO usuario(login,senha)VALUES(?,?)");

$stmt->bind_param("ss",$login,$senha);
//$login = "Gabrielly Coutinho";
//$senha = "1206";
$login = "Mikaeli H Prudencio";
$senha = "1920";
$stmt->execute();


?>