<?php


class Sql extends PDO {

    private $conn;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=dbphp7;port=3307";
        $username = "root";
        $password = "root";

        // Construtor PDO correto com 3 argumentos
        $this->conn = new PDO($dsn, $username, $password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    private function setParams($statment, $parameters = array())
    {
        foreach ($parameters as $key => $value) {
           $this->setParam($key, $value);
        }
    }

    private function setParam($statement, $key, $value)
    {
        $statement->bindParam($key, $value);
    }

    public function consulta($rawQuery, $params = array())
    {
        $stmt = $this->conn->prepare($rawQuery);
    
        $this->setParams($stmt, $params);
        
        $stmt->execute();

        return $stmt;
    }

    public function select($rawQuery, $params= array()):array
    {
        $stmt = $this->consulta($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }




}

?>