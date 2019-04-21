<?php

/* Novo operador do php7 
NULL coalesce (??)
*/

$a = NULL;

$b = 8;

$c = 10;

// ele ignora os null mostra o que tem valor e para.
echo $a ?? $b ?? $c;