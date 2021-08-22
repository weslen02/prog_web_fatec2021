<?php 
$compra = $_POST["compra"];


if ($_POST["radioCartao"] == "sim") {
    $compra = $compra - ($compra * 0.02);
}

if ($_POST["radioEntrega"] == "sim") {
    $compra = $compra + ($compra * 0.05);
}

echo "Total da compra = R$" . $compra;

?>