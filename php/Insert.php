<?php

//Conectando no Banco de Dados

include 'conexao.php';

//Receber os Dados do Formulário

$nome = $_POST['nome'];
$email = $_POST ['email'];
$cargo = $_POST ['cargo'];
$senha = $_POST ['senha'];

$sql = "INSERT INTO tb_user (nome, email, cargo, senha) VALUES ('$snome', '$email', '$email', '$cargo', '$senha')";

// Executar o Insert no Banco de Dados

$conexao -> query($sql);

if ($conexao -> query($sql)){
    echo "<script> alert('✔ Usuário inserido com Sucesso!'); window.location.href='tela_inicial.php';</script>";
} else {
    echo "Erro ao inserir usuário: " . $conexão->error;
}

//Fechar a conexão
$conexão->close();
?>