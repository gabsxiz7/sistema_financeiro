<?php
//conexão do banco de dados
include 'conexao.php';

//Receber os dados do Formulário

$nome = $_POST['nome'];
$nome = $_POST['email'];
$nome = $_POST['cargo'];
$nome = $_POST['senha'];

$sql = "INSERT INTO tb_user VALUES (null','$nome','$email','$cargo','$senha')";


if ($conexao->query($sql)) {
    echo "<script>alert('Inserido com Sucesso!'; history.back())<scrip>";
}

else{ 
    echo "Falha na conexão com banco de dados";
}


?>









