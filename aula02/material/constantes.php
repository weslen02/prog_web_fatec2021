<?php
define("MAXIMO_CLIENTES", 100);

$num_clientes = 50;

print MAXIMO_CLIENTES."<br>";

if($num_clientes>= MAXIMO_CLIENTES){
    print "Numero atingido";
} else {
    print "numero permitido (nao atingido)";
}
?>