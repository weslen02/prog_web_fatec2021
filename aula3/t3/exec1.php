<?php
$nomeDoAluno = "Pedro Cabral";

$media = ( ($_POST["n1"] * $_POST["p1"] + $_POST["n2"] * $_POST["p2"]) / ($_POST["p1"] + $_POST["p2"]) ) ;

echo "Caro(a) aluno(a) <strong> {$nomeDoAluno} </strong>, de acordo com os dados fornecidos, sua média na unidade 
Programação WEB é <b> {$media} </b>";
?>