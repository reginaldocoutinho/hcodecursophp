<?php

class Usuario {
    private $id;
    private $login;
    private $senha;
    private $dtCadastro;

    public function getId()
    {
        return $this->id;
    }
    public function setId($value)
    {
        $this->id = $value;
    }

    
    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($value)
    {
        $this->login = $value;
    }

    
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($value)
    {
        $this->senha = $value;
    }

    
    public function getData()
    {
        return $this->dtCadastro;
    }
    public function setData($value)
    {
        $this->dtCadastro = $value;
    }


    public function loadById($id)
    {
        $sql = new Sql();

        $result = $sql->select("SELECT * FROM usuario WHERE id = :ID", array(
            ":ID"=>$id
        ));

        if(count($result[0]) > 0)
        {
            $row = $result[0];
            
            $this->setId($row['id']);
            $this->setLogin($row['login']);
            $this->setSenha($row['senha']);
            $this->setData(new DateTime($row['dtcadastro']));
        }
    }


    public static function getList()
    {
        $sql = new Sql();
        return $sql->select("SELECT * FROM usuario ORDER BY login");
    }

    public static function search($login)
    {
        $sql = new Sql();
        return $sql->select("SELECT * FROM usuario WHERE login LIKE :SEARCH order by login", array(
            ':SEARCH'=>"%". $login. "%"
        ));
    }

    public function login($login, $password)
    {
        $sql = new Sql();

        $result = $sql->select("SELECT * FROM usuario WHERE login = :LOGIN AND senha = :PASSWORD", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));

        if(count($result) > 0)
        {
            $row = $result[0];
            
            $this->setId($row['id']);
            $this->setLogin($row['login']);
            $this->setSenha($row['senha']);
            $this->setData(new DateTime($row['dtcadastro']));
        }else{
            throw new Exception("Login e/ou senha inválidos.");
        }   
    }

    public function __toString()
    {
        return json_encode(array(
            'id'=>$this->getId(),
            'login'=>$this->getLogin(),
            'senha'=>$this->getSenha(),
            'id'=>$this->getId(),
            'dtCadastro'=>$this->getData()->format("d/m/Y H:i:s")
        ));
    }
}

?>