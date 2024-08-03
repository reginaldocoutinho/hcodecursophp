<?php

try {
    // Conexão com a instância padrão
    $conn = new PDO("sqlsrv:Server=localhost;Database=dbphp7", "sa", "novaSenha");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Preparando e executando a consulta SQL
    $stmt = $conn->prepare("SELECT * FROM usuario ORDER BY login");
    $stmt->execute();

    // Obtendo os resultados da consulta
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Exibindo os resultados
    foreach ($result as $row) {
        foreach ($row as $key => $value) {
            echo "<strong>" . $key . ":</strong> " . $value . "<br/>";
        }
        echo "===========================================================<br>";
    }

    //var_dump($result);

} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}

?>
