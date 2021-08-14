<?php

echo "Valor digitado = ". $_POST["numDig"] . "<br> <br>";

if($_POST["numDig"]  % 2 == 0){
    echo  "Numero Par";
} else {
    print "Numero Impar";
}

?>