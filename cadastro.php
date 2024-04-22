<?php
//Recebendo dados do formulário

$nomeCliente = $_POST ['nomeCliente'];
$endereco = $_POST ['endereco'];
$numeroEndereco = $_POST ['numeroEndereco'];
$cpf = $_POST ['cpf'];
$cnpj = $_POST ['cnpj'];
$numeroTelefone = $_POST ['numeroTelefone'];

include 'conexao.php';

$insert = "INSERT INTO tb_cliente VALUES (NULL,'$nomeCliente','$endereco','$numeroEndereco','$cpf','$cnpj','$numeroTelefone')";

$query = mysqli_query($conexao, $insert);

echo "Inserido com Sucesso";


?>

