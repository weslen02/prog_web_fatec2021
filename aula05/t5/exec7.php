<?php
$dadosPesssoas = array(
    'Joana' => $_POST["idade1"],
    'Maria' => $_POST["idade2"],
    'Amelia' => $_POST["idade3"],
);

echo "<fieldset>";

ksort($dadosPesssoas);
foreach ($dadosPesssoas as $nome => $idade) {
    echo "Nome: {$nome} | Idade: {$idade} <br>";
  }

echo "</fieldset>";

?>