<?php

$qualASuaIdade = 15;

$idadeCriaça = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCriaça){

    echo "Criança";
// da pra usar separado
} else if ($qualASuaIdade < $idadeMaior){

    echo "Adolecente";
// ou junto
} elseif ($qualASuaIdade < $idadeMelhor){

    echo "Adulto";

} else{

    echo "idoso";
}

echo "<br>";

//Operador ternário

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade.":"Maior de idade";
?>  