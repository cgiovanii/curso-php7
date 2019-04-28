<?php
/**
 * Manipulação de string com strpos
 */

$frase = "A repetição é mãe da retenção";

$palavra = "mãe";

$q = strpos($frase, $palavra); //Posição 17

// Vai buscar o texto do inicio até a mãe da posição 0 - 17
$texto = substr($frase, 0, $q);

//Vai buscar o texto apartir da posição 17 até o fim da frase
$texto2 = substr($frase, $q);

//Vai buscar o texto depois da posição 17 até o fim da frase
$texto3 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($texto3);

?>