<?php
define("PRECO_GASOLINA", $_POST["precoGas"]);

print_r("<strong> Valor da Viagem = R$" . ($_POST["kmPercorrido"] / $_POST["kmMedio"]) * $_POST["precoGas"] . "</strong> <br/>");
print_r("<strong> Consumo médio de comb. na viagem = km" . ($_POST["kmPercorrido"] / $_POST["kmMedio"]) . "</strong> <br/>");
echo "<strong> Preço da Gasolina = R$" . PRECO_GASOLINA . "</strong>";

?>