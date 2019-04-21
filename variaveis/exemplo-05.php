<?PHP 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* Escopo de variável:

As variaveis não são vistas dentro de uma função se estiver fora sem ser declaradas como global.

e as variáveis dentro das funcões também não são vistas por outras ou fora delas.

Tipos:
variável de escopo local = só e visto no local onde é declarada.
Variavel de sessão ou global = visto em todo lado.

*/

$nome = "Giovani";

function teste(){
    //global $nome;
    echo $nome;
}

function teste2(){
    $nome = "João";
    echo $nome. " agora no teste2";
}

teste();
teste2();