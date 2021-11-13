<?php

use function PHPSTORM_META\type;

session_start();

require "banco.php";
include "auxiliar.php";

$exibir_tabela = true;
$tarefa = array(
    'id' => 0,
    'nome' => '',
    'descricao' => '',
    'prazo' => '',
    'prioridade' => 1,
    'concluida' => ''
);

if (array_key_exists('nome', $_GET) && $_GET['nome'] != '') {
    $tarefa = [];

    $tarefa['nome'] = $_GET['nome'];
    
    if(array_key_exists('descricao', $_GET)){
        $tarefa['descricao'] = $_GET['descricao'];
    }
    else {
        $tarefa['descricao'] = '';
    }

    if(array_key_exists('prazo', $_GET) && $_GET['prazo'] != ''){
        $tarefa['prazo'] = $_GET['prazo'];
    }
    else {
        $tarefa['prazo'] = '0001-01-01';
    } 

    $tarefa['prioridade'] = $_GET['prioridade'];

    if(array_key_exists('concluida', $_GET)){
        $tarefa['concluida'] = $_GET['concluida'];
    }
    else {
        $tarefa['concluida'] = 0;
    }    

    gravar_tarefa($conexao, $tarefa);
}

$lista_tarefas = buscar_tarefas($conexao);
include "template.php";
