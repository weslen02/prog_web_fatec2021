<?php 

session_start();

if (array_key_exists('matricula', $_GET) && $_GET['matricula'] != '') {
    $aluno = [];

    $aluno['matricula'] = $_GET['matricula'];
    
    if(array_key_exists('nome', $_GET)){
        $aluno['nome'] = $_GET['nome'];
    }
    else {
        $aluno['nome'] = '';
    }

    if(array_key_exists('media', $_GET)){
        $aluno['media'] = intval($_GET['media']);
        $aux = $aluno['media'];
    }
    else {
        $aluno['media'] = 0;
    }

    $_SESSION['lista_alunos'][] = $aluno;
}

if (array_key_exists('lista_alunos', $_SESSION)) {
    $lista_alunos = $_SESSION['lista_alunos'];
} else {
    $lista_alunos = [];
}

include "exec03_template.php";

?>