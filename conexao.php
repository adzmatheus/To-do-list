<?php
$servidor = "localhost";
$usuario = "id9193275_matheus";
$senha = "99083341";
$dbname = "id9193275_tarefas";

//Criando a conexao
$mysqli = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Caso algo tenha dado errado
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>