<?php
session_start();
include_once __DIR__ . '/conexao.php';
  
if (isset($_GET['id'])) {
    $id_usuario =$_GET['id'];

    $sql = "DELETE FROM tb_user WHERE id_usuario = $id_usuario";
    if ($conexao->query($sql) === TRUE) {
        echo "<script>alert('Usuário excluído com sucesso'); window.location.href='listar_usuarios.php';</script>";    
    } else {
        echo "Erro ao excluir usuário: " . $conexao->error;
    }
} else {
    echo "<script>alert('Usuário não encontrado'); window.location.href='listar_usuarios.php';</script>";
}
?>