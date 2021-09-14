<?php
$dadosPesssoas = array(
    'Joana' => $_POST["idade1"],
    'Maria' => $_POST["idade2"],
    'Renata' => $_POST["idade3"],
);

echo "<fieldset>";

foreach ($dadosPesssoas as $nome => $idade) {
    echo "Nome: {$nome} | Idade: {$idade} <br>";
  }

$nomeMenorIdade = array_keys($dadosPesssoas, min($dadosPesssoas));

echo "A menor idade entre as pessoas é a de <strong>" . $nomeMenorIdade[0] . " = " . min($dadosPesssoas) . "</strong>";

echo "</fieldset>";

?>