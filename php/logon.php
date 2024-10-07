<?php
//recebendo os dados da tela de login

$email = $post ['email'];
$password = $_post['senha'];

//link da conexão
include 'conexao.php';

//Pegar os dados do banco

$sql = "SELECT * FROM tb_user WHERE email = '$email'";

$query = $conexao->query($sql);

$resultado = $query->fetch_assoc();

print_r($resultado);








?>