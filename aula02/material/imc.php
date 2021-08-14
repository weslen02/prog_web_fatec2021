<?php

declare(strict_types=1);

function calculoImc(float $peso, float $altura):int{
    return ($peso / ($altura*$altura));
}


$imc_1 = calculoImc(80, 1.75);
echo '<br>'.$imc_1.'<br>';

$imc_2 = calculoImc('80', 1.75);
echo '<br>'.$imc_2.'<br>';



?>