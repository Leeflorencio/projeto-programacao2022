<?php

/* Acesso ao servidor */
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "workout";

/*Conectando ao banco de dados */
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

/*Habilitando charset UTF8 */
mysqli_set_charset($conexao, "utf8");

/*Teste 

if(! $conexao){
    die(mysqli_connect_error($conexao));
} else {
    echo "Beleza! :)";
}
*/