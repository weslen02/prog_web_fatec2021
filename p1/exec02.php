<?php

$dipirona_value = 0;
$semeticona_value = 0;
$diclofenaco_value = 0;
echo "<fieldset>";
//tratamento para quando é nulo
if (isset($_POST["dipirona"])) {
    $dipirona_value = 5;
}

if (isset($_POST["semeticona"])) {
    $semeticona_value = 3;
}

if (isset($_POST["diclofenaco"])) {
    $diclofenaco_value = 80;
}

$compras = array(
    'dipirona' => $dipirona_value,
    'semeticona' => $semeticona_value,
    'diclofenaco' => $diclofenaco_value
);

$total = array_sum($compras);

if (isset($_POST["desconto"])) {
    $total = array_sum($compras) - ( (array_sum($compras) * 0.05 ));
}

foreach ($compras as $produto => $valor) {
    echo "{$produto} = {$valor} <br>";
}

echo "Total da compra = " . $total;

echo "<br>";

echo "</fieldset>";

?>