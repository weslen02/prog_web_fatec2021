<?php
$desconto = 0.1;
$icms = 0.12;
$comissao = 0.05;

echo "Valor de Custo do produto = " . $_GET["valorDaCompra"] . " Valor liquido do produto " . $_GET["valorDaCompra"] - (($desconto + $icms + $comissao) * $_GET["valorDaCompra"]);
?>