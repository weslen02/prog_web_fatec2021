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

    if(array_key_exists('nota', $_GET)){
        $aluno['nota'] = $_GET['nota'];
    }
    else {
        $aluno['nota'] = '0';
    }

    $_SESSION['lista_alunos'][] = $aluno;

}

if (array_key_exists('lista_alunos', $_SESSION)) {
    $lista_alunos = $_SESSION['lista_alunos'];
} else {
    $lista_alunos = [];
}

include "exec01_template.php";

?>