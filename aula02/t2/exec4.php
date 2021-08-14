<?php

echo "Valor digitado = ". $_POST["num1"] . " e " . $_POST["num2"] . "<br> <br>";

if($_POST["num1"] <  $_POST["num2"]){
    echo "Menor = " . $_POST["num1"] . " | Maior = " . $_POST["num2"];
} else if ($_POST["num1"] >  $_POST["num2"]) {
    echo "Menor = " . $_POST["num2"] . " | Maior = " . $_POST["num1"];
} else {
    print "Numeros Iguais";
}

?>