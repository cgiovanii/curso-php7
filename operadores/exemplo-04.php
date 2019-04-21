<?php

/* Operadores de comparação.
== comparador de valor
=== comparador de tipo
*/

$a = 55.0;
$b = 55;

var_dump($a > $b); // maior que ...

echo "<br>";

var_dump($a < $b); // menor que ...

echo "<br>";

var_dump($a == $b);// se é igual a ... (igualdade de valor).

echo "<br>";

var_dump($a === $b);// se é igual a ...(igualdade de identidade).

echo "<br>";

var_dump($a != $b); // se é diferente... (de valor).

echo "<br>";

var_dump($a !== $b); // se é diferente...(de identidade).

echo "<br>";