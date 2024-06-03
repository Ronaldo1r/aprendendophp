<?php

include_once 'includes/functions.php';

sec_sessiom_start();

//Desfazer todos os valores da sessão

$_SESSION = array();

// obtém os parâmetros das sessões 

$params = session_get_cookie_params();

//Deleta o cookie em uso.
setcookie(session_name(),
'', time   () -  42000,         
$params["path"],         
$params["domain"],         
$params["secure"],         
$params["httponly"]);

//Destrói a sessão
session_destroy();
header('Location:../index.php');



