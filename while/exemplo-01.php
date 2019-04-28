<?php

/** WHILE:
 * O programa vai fazer um sorteio e quando sair o 3 ele para. 
 */

$condicao = true;

while ($condicao) {
    
    $numero = rand(1, 10);

    if ($numero === 3) {
        echo "TRÊS!!!! ";
        $condicao = false;
    }

    echo $numero . " ";
}
?>