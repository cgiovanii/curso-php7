<?php

/**
 *  if then else
 */

echo "--IF: <br>";

$meuSalario= 0;

$salarioMinimo = 600;

$salarioMedio = 900;


if ($meuSalario <= $salarioMinimo) {
    
    echo "Passa fome.";

} elseif ($meuSalario <= $salarioMedio) {

    echo "Tens que ganhar mais...";

} else {

    echo "Está a gahar como deve ser...";
}

echo "<br><br>";

echo ($meuSalario == 0)?"Vai trabalhar vagabundo":"Tem juizo.";

?>