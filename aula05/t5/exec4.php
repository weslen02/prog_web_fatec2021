<?php

$impressora_value = 0;
$celular_value = 0;
$notebook_value = 0;
echo "<fieldset>";
//tratamento para quando é nulo
if (isset($_POST["impressora"])) {
    $impressora_value = 200;
}

if (isset($_POST["celular"])) {
    $celular_value = 1000;
}

if (isset($_POST["notebook"])) {
    $notebook_value = 2000;
}

$compras = array(
    'impressora' => $impressora_value,
    'celular' => $celular_value,
    'notebook' => $notebook_value
);

foreach ($compras as $produto => $valor) {
    echo "{$produto} = {$valor} <br>";
}

echo "Total da compra = " . array_sum($compras);

echo "<br>";

echo "</fieldset>";

?>