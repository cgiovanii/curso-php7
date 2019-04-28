<?php
/**
 *  Diferenças entre include e require:
 * 
 * 1º - o require exige que o ficheiro exista e esteja funcionando bem, se não dá um erro.
 * 2º - o include tenta funcionar mesmo que o ficheiro tenha erros.
 * 
 * ----
 * Variações:
 *
 * include_once
 * require_once
 * 
 */
//include "inc/exemplo-01.php";
//require_once "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";

$resultado = somar(10, 20);

echo $resultado;

?>