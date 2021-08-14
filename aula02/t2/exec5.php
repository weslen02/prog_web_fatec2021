<?php
$notas = array($_POST["nota1"],$_POST["nota2"],$_POST["nota3"]);

$media = ($notas[0] + $notas[1] + $notas[2]) / 3;

echo "Valor digitado = " . "|" . $notas[0] . "|" . $notas[1] . "|" . $notas[2] . "<br>";
echo "Valor da MEDIA = " . $media . "<br> <br>";

if($media >= 6){
    echo  "APROVADO";
} else {
   print "REPROVADO";
}

?>