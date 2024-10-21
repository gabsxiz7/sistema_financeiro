<?php

//Conectando no Banco de Dados

include 'conexao.php';

//Receber os Dados do Formulário

$nome = $_POST['nome'];
$email = $_POST ['email'];
$cargo = $_POST ['cargo'];
$senha = $_POST ['senha'];

$sql = "INSERT INTO tb_user VALUES (null, '$nome', '$email', '$cargo', '$senha')";

// Executar o Insert no Banco de Dados

$conexao -> query($sql);

if ($conexao -> query($sql)){
    echo "<script> alert('✔ Inserido com Sucesso!'); history.back(); </script>";
}

else{
    echo "Falha na Conexão com o Banco de Dados";
}







?>