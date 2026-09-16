<?php 
$servidor = "localhost";
$banco = "AulaDB";
$senha = "";
$cliente = "root";

$sql = "Create database if not EXISTS AulaDb;";

//conexão sem escolher o banco
$conexao = mysqli_connect($servidor, $cliente, $senha);

//criação automática do banco de dados
$resultado = mysqli_query($conexao, $sql);

//seleciono o banco recém criado
mysqli_select_db($conexao, "AulaDb");

?>
