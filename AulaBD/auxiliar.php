<?php

function traduz_prioridade($codigo)
{
    $prioridade = '';
    switch ($codigo) {
        case 1:
            $prioridade = 'Baixa';
            break;
        case 2:
            $prioridade = 'Média';
            break;
        case 3:
            $prioridade = 'Alta';
            break;
    }

    return $prioridade;
}

function traduz_concluida($op)
{
    $concluida = '';
    switch ($op) {
        case 0:
            $concluida = 'Nao';
            break;
        case 1:
            $concluida = 'Sim';
            break;
    }

    return $concluida;
}