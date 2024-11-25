<?php
session_start();
//recebendo os dados da tela de login

$email = $_POST['email'];
$password = $_POST['senha'];

//link da conexão
include 'conexao.php';


//Pegar os dados do banco

$sql = "SELECT * FROM tb_user WHERE email = '$email'";
$query = $conexao->query($sql);
if ($query->num_rows > 0){
    $resultado = $query->fetch_assoc();
    $email_banco = $resultado['email'];
    $senha_banco = $resultado['senha'];
    
    if ($email == $email_banco && $password == $senha_banco) {
        $_SESSION['id'] = $resultado['id_usuario'];
        header('Location: ../tela_inicial.php');
    }else {
        echo "<script> alert('Usuario ou senha invalida'); history.back(); </script>";
    }
}


?> 