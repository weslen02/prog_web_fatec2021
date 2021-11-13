<?php 

session_start();

require "banco.php";
include "auxiliar.php";

$exibr_tabela = false;
    
if (array_key_exists('nome', $_GET) && $_GET['nome'] != '') {
    $tarefa = [];
    $tarefa['id'] = $_GET['id'];
    $tarefa['nome'] = $_GET['nome'];
    
    if(array_key_exists('descricao', $_GET)){
        $tarefa['descricao'] = $_GET['descricao'];
    }
    else {
        $tarefa['descricao'] = '';
    }

    if(array_key_exists('prazo', $_GET)){
        $tarefa['prazo'] = $_GET['prazo'];
    }
    else {
        $tarefa['prazo'] = '';
    }   

    $tarefa['prioridade'] = $_GET['prioridade'];

    if(array_key_exists('concluida', $_GET)){
        $tarefa['concluida'] = $_GET['concluida'];
    }
    else {
        $tarefa['concluida'] = '';
    }
    
    editar_tarefa($conexao, $tarefa);
    header('Location: tarefas.php');
    die();
}

$tarefa = buscar_tarefas($conexao, $_GET['id']);
require "template.php";

?>
