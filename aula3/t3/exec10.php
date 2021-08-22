<?php 
$compra = $_POST["compra"];

if ($_POST["idade"] >= 55 && $_POST["idade"] < 70) {
    if(isset($_POST["checkboxRede"])) {
        $compra = $compra - ($compra * 0.1);
    } else {
        $compra = $compra - ($compra * 0.05);
    }
} else if ($_POST["idade"] >= 70) {
    if(isset($_POST["checkboxRede"])) {
        $compra = $compra - ($compra * 0.12);
    } else {
        $compra = $compra - ($compra * 0.07);
    }
} else {
    $compra = $compra;
}

//tratamento para quando é nulo
echo "Total da compra = R$" . $compra;

?>