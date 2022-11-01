// Criar conexão
<?php

$hostname = "localhost";
$bancodedados = "armazena_site";
$usuario = "root";
$senha = "002185";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>