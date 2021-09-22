<?php 

session_start();
    
if (array_key_exists('nome', $_GET) && $_GET['nome'] != '') {
    $contato = [];

    $contato['nome'] = $_GET['nome'];
    
    if(array_key_exists('telefone', $_GET)){
        $contato['telefone'] = $_GET['telefone'];
    }
    else {
        $contato['telefone'] = '';
    }

    if(array_key_exists('email', $_GET)){
        $contato['email'] = $_GET['email'];
    }
    else {
        $contato['email'] = '';
    }
    
    $contato = serialize($contato);
    
    setcookie('contato', $contato, time()+3600); //exppira em 1 hora (3600 segundos)
}

include "template_desafio.php"; /* é incluido a partir daqui, quando clicado nesse arquivo carrega o php e dpois o html */

?>