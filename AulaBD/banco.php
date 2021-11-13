<?php

$bdServidor = '192.168.64.2';
$bdUsuario = 'sistematarefa';
$bdSenha = 'sistema';
$bdBanco = 'tarefas';
$bdPorta = '3306';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco, $bdPorta);

if (!$conexao) {
    echo "Problemas para conectar no banco. Erro: ";
    echo mysqli_connect_error();
    die();
}

function buscar_tarefas($conexao)
{
    $sqlBusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao, $sqlBusca);
    $tarefas = [];
    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;
    }
    return $tarefas;
}

function gravar_tarefa($conexao, $tarefa)
{
    $sqlGravar = "
        INSERT INTO tarefas
        (nome, descricao, prazo, prioridade, concluida)
        VALUES
        (
        '{$tarefa['nome']}',
        '{$tarefa['descricao']}',
        '{$tarefa['prazo']}',
        '{$tarefa['prioridade']}',
        '{$tarefa['concluida']}'
        )
    ";
    mysqli_query($conexao, $sqlGravar);
}

function buscar_tarefa($conexao, $id)
{
    $sqlBusca = 'SELECT * FROM tarefas where id = ' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}

function editar_tarefa($conexao, $tarefa)
{
    $sql = "
        UPDATE tarefas SET
            nome = '{$tarefa['nome']}',
            descricao = '{$tarefa['descricao']}',
            prioridade = {$tarefa['prioridade']},
            prazo = '{$tarefa['prazo']}',
            concluida = {$tarefa['concluida']}
        WHERE id = {$tarefa['id']}
    ";
    mysqli_query($conexao, $sql);
}
