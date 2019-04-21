<?php

/* precedencia de operadores

* Equações de primeiro grau

$resultado = 10 + 3 / 2 ; //primeiro divide e depois soma
$resultado = (10 + 3) / 2 ; //primeiro soma e depois divide

*/

/*

$resultado = 10 + 3 / 2 ; // igual a 11.5

$resultado = (10 + 3) / 2 ; // igual a 6.5

echo $resultado;

*/

// && é o AND (e)
//$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3; // compara se a duas são verdadeiras

// || é o OR (ou)
$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3; // compara se uma ou outra são verdadeiras

var_dump($resultado);