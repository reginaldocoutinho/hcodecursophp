<?php

    class Cadastro 
    {
        private $nome;
        private $email;
        private $senha;

        public function getNome():string
        {
            return $this->nome;
        }

        public function getEmail():string
        {
            return $this->email;
        }

        public function getSenha():string
        {
            return $this->senha;
        }

        public function setNome($valor)
        {
            $this->nome = $valor;
        }
 
        public function setEmail($valor)
        {
            $this->email = $valor;
        }

        public function setSenha($valor)
        {
            $this->senha = $valor;
        }

        public function __toString()
        {
            return json_encode(array(
                "nome"=>$this->getNome(),
                "email"=>$this->getEmail(),
                "senha"=>$this->getSenha()
            ));
        }
    
    
    }
?>