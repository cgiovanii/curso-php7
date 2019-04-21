<?php
// tipos de variáveis:
// tipos básico

$nome = "Hcode";
$site = "www.hcode.com.br";

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

///////////////////////////////////
// tipos compostos

$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);

//////////////////////////////////////
// tipos especiais

$arquivo = fopen("exemplo-03.php", "r");

//var_dump($arquivo);

//usar null e não " " para nulo ou destrir a variável.
$nulo = null;