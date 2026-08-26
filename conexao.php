<?php

$servidor = "localhost";
$banco = "Aula08";
$senha = "";
$usuario = "root";

$sql = "Create database if not EXISTS AulaDb";
//conexao sem escolher o banco
$conexao = mysqli_connect($servidor, $usuario, $senha);

//criação automática do banco de dados
$resultado = mysqli_query($conexao, $sql);

//selecione o banco recém criado
mysqli_select_db ($conexao, "AulaDb");


?>

