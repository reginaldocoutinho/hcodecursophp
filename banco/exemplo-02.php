<?php

$conn = new mysqli("localhost","root", "", "dbphp7", 3307);

if ($conn->connect_error)
{
    echo "Error: " . $conn->connect_error;    
}

$result = $conn->query("SELECT * FROM usuario");

$dados = array();

while ($row = $result->fetch_assoc()) 
{   
    array_push($dados, $row);
}

echo json_encode($dados);
?>