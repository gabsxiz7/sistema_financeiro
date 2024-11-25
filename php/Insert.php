<?php

//Conectando no Banco de Dados

include 'conexao.php';

//Receber os Dados do Formulário

$nome = $_POST['nome'];
$email = $_POST ['email'];
$cargo = $_POST ['cargo'];
$senha = $_POST ['senha'];

$sql = "INSERT INTO tb_user (nome, email, cargo, senha) VALUES ('$nome','$email', '$cargo', '$senha')";

// Executar o Insert no Banco de Dados

if ($conexao -> query($sql) === TRUE) {
    echo "<script> alert('✔ Usuário inserido com Sucesso!'); window.location.href='tela_inicial.php';</script>";
} else {
    echo "Erro ao inserir usuário: " . $conexao->error;
}

//Fechar a conexão
$conexao->close();
?>