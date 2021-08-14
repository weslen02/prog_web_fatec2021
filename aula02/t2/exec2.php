<?php
$tabuda = array(0,1,2,3,4,5,6,7,8,9,10);

echo "Valor digitado = ". $_POST["numTabuada"] . "<br> <br>";

if($_POST["numTabuada"] > 10){
    echo  "Valor deve ser positivo menor ou igual 10";
} else if($_POST["numTabuada"] < 0) {
    print "Valor Não pode ser negativo Negativo";
} else {
    for($i = 0; $i < count($tabuda); $i++) {
        echo $_POST["numTabuada"] . " X " . $tabuda[$i] . " = " . $tabuda[$i] * $_POST["numTabuada"] . "<br>"; 
    }
}

?>