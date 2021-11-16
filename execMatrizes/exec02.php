<?php 

session_start();

$media = 0;
    
if (array_key_exists('matricula', $_GET) && $_GET['matricula'] != '') {
    $aluno = [];

    $aluno['matricula'] = $_GET['matricula'];
    
    if(array_key_exists('nome', $_GET)){
        $aluno['nome'] = $_GET['nome'];
    }
    else {
        $aluno['nome'] = '';
    }

    if(array_key_exists('nota', $_GET)){
        $aluno['nota'] = intval($_GET['nota']);
    }
    else {
        $aluno['nota'] = 0;
    }

    $_SESSION['lista_alunos'][] = $aluno;
}

if (array_key_exists('lista_alunos', $_SESSION)) {
    $lista_alunos = $_SESSION['lista_alunos'];
} else {
    $lista_alunos = [];
}

//$media = array_sum($lista_alunos['nota']);

include "exec02_template.php";

?>