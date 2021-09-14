<?php
$idades = array($_POST["idade1"],
    $_POST["idade2"],
    $_POST["idade3"],
    $_POST["idade4"]
);

echo "<fieldset>";

$idadeMedia = array_sum($idades)/count($idades);

echo "Joana idade {$idades[0]} <br>";
echo "Maria idade {$idades[1]} <br>";
echo "Renata idade {$idades[2]} <br>";
echo "Rita idade {$idades[3]} <br>";

echo "A idade Media entre as pessoas é = {$idadeMedia}";

echo "</fieldset>";

?>