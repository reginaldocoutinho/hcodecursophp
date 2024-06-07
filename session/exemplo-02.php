<?php
//Iniciando a sessão
require_once("config.php");

// apaga todas as variaveis de sessão
// e continua com o mesmo usuário
session_unset();
// apaga todas as variaveis de sessão 
// mas perde o usuário
session_destroy();
if(isset($_SESSION['nome'])){
echo $_SESSION['nome'];
}
?>