<?php
    // esse arquivo funciona copiando o comando de url abaixo e colando/executando no navegador.
    // por url: http://localhost/fatecmm/aula3/material/PASSAGEM_PARAMETROS/recebe_ulr.php?idade=50&altura=1.5&nascimento=10/07/1980
    //recebendo dados no servidor
    $idade      = $_GET["idade"];
    $altura     = $_GET["altura"];
    $data_nasc  = $_GET["nascimento"];

    
    echo "idade = {$idade} altura = {$altura} data de nascimento = {$data_nasc}";
?>