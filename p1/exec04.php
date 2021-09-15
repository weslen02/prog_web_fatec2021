<?php

echo "<strong>Original digitado: ({$_POST['n1']}) | ({$_POST['n2']}) | ({$_POST['n3']})</strong><br>";

echo "<br>";

//Essa função ordena um array. Os elementos serão ordenados do menor para o maior ao final da execução dessa função. (Ascendente ou crescente)
echo "<strong>sort</strong><br>";
$arrSort = array($_POST['n1'], $_POST['n2'], $_POST['n3']);
sort($arrSort);
print_r($arrSort);

echo "<br>";

echo "<br><strong>rsort</strong><br>";
//Ordena um array em ordem descrescente
$arrRSort = array($_POST['n1'], $_POST['n2'], $_POST['n3']);
rsort($arrRSort);
print_r($arrRSort);

echo "<br>";

echo "<br><strong>asort</strong><br>";
//Ordena um array EM ORDEM ASCENDENTE OU CRESCENTE considerando o VALOR, MAS MANTENDO A ASSOCIAÇÃO entre índices e valores
$arrASort = array('b' => $_POST['n1'], 'a' => $_POST['n2'], 'c' => $_POST['n3']);
asort($arrASort);
print_r($arrASort);

echo "<br>";

echo "<br><strong>arsort</strong><br>";
//Ordena um array em ordem descrescente considerando o VALOR, MAS MANTENDO A ASSOCIAÇÃO entre índices e valores
$arrARSort = array('b' => $_POST['n1'], 'a' => $_POST['n2'], 'c' => $_POST['n3']);
arsort($arrARSort);
print_r($arrARSort);

echo "<br>";

echo "<br><strong>ksort</strong><br>";
//Ordena um array pelas chaves em ordem ascendente ou crescente
$arrKSort = array('b' => $_POST['n1'], 'a' => $_POST['n2'], 'c' => $_POST['n3']);
ksort($arrKSort);
print_r($arrKSort);

echo "<br>";

echo "<br><strong>krsort</strong><br>";
//Ordena um array pelas chaves em ordem descrescente
$arrKRSort = array('b' => $_POST['n1'], 'a' => $_POST['n2'], 'c' => $_POST['n3']);
krsort($arrKRSort);
print_r($arrKRSort);

?>