<?php 

session_start();

$verdade = false;

if (array_key_exists('codigo', $_GET) && $_GET['codigo'] != '') {
    $medicamentos = [];

    $medicamentos['codigo'] = $_GET['codigo'];
    
    if(array_key_exists('nome', $_GET)){
        $medicamentos['nome'] = $_GET['nome'];
    }
    else {
        $medicamentos['nome'] = '';
    }

    if(array_key_exists('preco', $_GET)){
        $medicamentos['preco'] = intval($_GET['preco']);
        $aux = $medicamentos['preco'];
    }
    else {
        $medicamentos['preco'] = 0;
    }

    $_SESSION['lista_medicamentos'][] = $medicamentos;
}

if (array_key_exists('lista_medicamentos', $_SESSION)) {
    $lista_medicamentos = $_SESSION['lista_medicamentos'];
} else {
    $lista_medicamentos = [];
}



if (!is_null(array_column($lista_medicamentos, 'nome'))) {
    if (array_search('Anador', array_column($lista_medicamentos, 'nome'))) $verdade = true;
    
} else {
    $verdade = false;
}

include "exec05_template.php";

?>