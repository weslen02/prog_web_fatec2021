<?php 
$compra = $_POST["compra"];

if ($_POST["radioPagamento"] == "vista") {
    $compra = $compra - ($compra * 0.05);
} else {
    $compra = $compra + ($compra * 0.02);
}

//tratamento para quando é nulo
if (isset($_POST["checkboxVisa"])) {
    echo "<br> pode participar do sorteio <br>";
} else {
    echo "<br> Não participa do sorteio <br>";
}
echo "Total da compra = R$" . $compra;

?>