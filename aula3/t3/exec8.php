<?php 
$compra = $_POST["compra"];


if ($_POST["checkboxCartao"] == "sim") {
    $compra = $compra - ($compra * 0.02);
}

if ($_POST["checkboxEntrega"] == "sim") {
    $compra = $compra + ($compra * 0.05);
}

echo "Total da compra = R$" . $compra;

?>