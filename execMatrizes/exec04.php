<?php 

session_start();

$verdade = false;

if (array_key_exists('matricula', $_GET) && $_GET['matricula'] != '') {
    $aluno = [];

    $aluno['matricula'] = $_GET['matricula'];
    
    if(array_key_exists('nome', $_GET)){
        $aluno['nome'] = $_GET['nome'];
    }
    else {
        $aluno['nome'] = '';
    }

    $_SESSION['lista_alunos'][] = $aluno;
}

if (array_key_exists('lista_alunos', $_SESSION)) {
    $lista_alunos = $_SESSION['lista_alunos'];
} else {
    $lista_alunos = [];
}

if (!is_null(array_column($lista_alunos, 'nome'))) {
    if (array_search('Heitor', array_column($lista_alunos, 'nome'))) $verdade = true;
    
} else {
    $verdade = false;
}

include "exec04_template.php";

?>