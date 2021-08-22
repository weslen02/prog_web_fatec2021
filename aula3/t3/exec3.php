<?php
    $desconto      = $_GET["desconto"];
    $icms     = $_GET["icms"];
    $comissao  = $_GET["comissao"];
    
    echo "Valor de Custo do produto = " . $_GET["valorProduto"] . " Valor liquido do produto " . $_GET["valorProduto"] - ( ($desconto + $icms + $comissao) * $_GET["valorProduto"] ) ;
?>