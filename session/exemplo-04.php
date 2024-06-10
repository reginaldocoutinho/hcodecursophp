<?php
//Criar uma nova sessão

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);
?>