<?php include "conexao.php"; 

if(count($_POST) > 0)
{
    $id_cliente = $_POST["id"];
    $nome = $_POST["nome"];
    $cpf_cnpj = $_POST["cpf_cnpj"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $data_nascimento = $_POST["data_nascimento"];
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];
    $ativo = $_POST["ativo"];

    if( empty($nome) )
    {
        echo "Nome está em branco";
    }
    mysqli_query($conexao, $sql);
    header('location: clientes.php?mensagem=Cadastrado com sucesso');
}
else
{
    header('location: clientes.php');
}