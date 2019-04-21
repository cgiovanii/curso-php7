<?php

/* Variáveis pré-definidas:

-- Arrays super globais */

/*
Exemplo de utilização: 
No browser a seguir ao nome do ficheiro php colocamos uma ? seguido pela variável e o valor
a ser atribuido (http://localhost/curso-php7/variaveis/exemplo-04.php?a=123),
o $_GET pega os numeros 123 como string e o (int) antes do GET converte para inteiro. 

$nome = (int)$_GET["a"];

*/

$nome = (int)$_GET["a"];

//var_dump($nome);

//Pega o ip do browser
//$ip = $_SERVER["REMOTE_ADDR"];

// Pega o nome do arquivo
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;