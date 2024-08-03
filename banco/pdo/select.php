<?php
require_once("conexao.php");
$stmt = $conn->prepare("SELECT * FROM usuario ORDER BY id");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row)
{
    foreach ($row as $key => $value)
    {
        echo "<strong>" . $key . ":</strong>" . $value . "<br/>";
    }
    echo "===========================================================<br>";
}

//var_dump($result);

?>