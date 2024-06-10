<?php
require_once("../config.php");
//echo session_save_path();
session_status();

switch(session_status()){
    case PHP_SESSION_DISABLED:
        echo "Sessão desabilitadas"; 
    break;
    case PHP_SESSION_NONE:
        echo "Sessão habilitada, mas não iniciada"; 
    break;
    case PHP_SESSION_ACTIVE:
        echo "Sessão habilitada e uma sessão existe"; 
    break;
}
    
?>