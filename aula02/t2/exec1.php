<?php

echo "Valor digitado = ". $_POST["numero"] . "<br>";

if($_POST["numero"] > 0){
    echo  "Valor Positivo";
} else if($_POST["numero"] < 0) {
    print "Valor Negativo";
} else {
    print "Igual a Zero";
}

?>