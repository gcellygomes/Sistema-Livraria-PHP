<?php

//Recebendo dados do formulário

$nome = $_POST['login'];
$senha = $_POST['senha'];

//incluindo arquivo de conexão

include 'conexao.php';

//selecionar os dados no banco de dados

$select = "SELECT * FROM tb_user WHERE login = '$nome'";

$query= mysqli_query($conexao, $select);

$result = mysqli_fetch_array($query);


// Dados do banco armazenado na variável

$name_banco = $result['login'];
$senha_banco = $result['Senha'];



//Comparação para acessar o Sistema


if ($nome == $name_banco && $senha == $senha_banco) {

    header('location: cadastro_cliente.html');

} else{

    echo "<script>alert ('Usuario Invalido!'); history.back()</script>";

}


?>
