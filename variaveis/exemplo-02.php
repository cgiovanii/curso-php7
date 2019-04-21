<?php

//Boa prática camel case $nomeDaVariavel primeira letra minuscula.

//comentarios  uma linha = // | multilinhas = /* */ 

/*
$anoNascimento = 1998;

$nomeCompleto = "Carlos Oliveira";
*/

$nome1 = "carlos";

$sobreNome = "Oliveira";

$nomeCompleto = $nome1 . $sobreNome;


echo $nome1;
echo "<br/>";
unset($nome1);
if (isset($nome1)){
    echo $nome1;
};
