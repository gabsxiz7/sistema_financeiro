<?php
session_start();
var_dump($_SESSION);
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Página de Boas-Vindas!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
    <style>
        body {
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    font-size: 20px;
    padding: 20px;
    margin: 0px;
    background-color: rgb(212, 255, 255);
}
        button {
    border-radius: 5px;
    background-color:azure;
    font-size: 16px;
    padding: 10px 20px;
    margin: 5px;
    cursor: pointer;
    text-decoration: none;
}
    </style>
<body>
    <a href="php/logout.php"><button class="button">Sair</button></a>
        <?php
        if (isset($_SESSION['id'])) {
                $id = $_SESSION['id'];
                $sql = "SELECT * FROM tb_user WHERE id_usuario = $id";
                $query = $conexao->query($sql);
                if ($query->num_rows > 0) {
                    $resultado = $query->fetch_assoc();
                    echo "<p>Bem-vindo, Gabriella" . htmlspecialchars ($resultado['nome']) . "!</p>";
                 } else{
                    echo "<script>alert('Usuário não encontrado.'); history.back();</script>";
            } 
                }else { 
                    echo "<script>alert('Usuário precisar logar.'); window.location.href='index.html';</script>";  

            }
                
        ?>
    </div>
    <h1>Bem-vindo ao Sistema!</h1>
    <p>Escollha uma das opções abaixo:</p>

    <a href="Categoria.php"><button class="button">Cadastro de categorias</button></a>
    <a href="Lancamento.php"><button class="button">Lançamentos</button></a>
    <a href="php/logout.php"><button>Sair</button></a>

</body>
</html>