<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost;port=3307", "root", "root");

$stmt = $conn->prepare("SELECT * FROM usuario ORDER BY login");

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