<?php
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');
foreach ($arr as $val) {
    if ($val == 'stop') {
        break;    /* You could also write 'break 1;' here. */
    }
    echo "$val<br />\n";
}

/* Using the optional argument. */

$i = 0;
while (++$i) {
    switch ($i) {
        case 5:
            echo "At 5<br />\n";
            break 1;  /* Exit only the switch. */
        case 10:
            echo "At 10; quitting<br />\n";
            /*
            * break aceita um argumento numérico opcional que diz quantas estruturas aninhadas deverá interromper.
            * O valor padrão é 1, somente a estrutura imediata é interrompida
            * Exit the switch and the while. SAI DAS SUAS ESTRUTURAS POR CONTA DA CONDICAO DO BREAK INTERROMPER 2 ESTRUTURA ANINHADAS
            */
            break 2; 
        default:
            break;
    }
}
?>