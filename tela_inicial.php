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
    font-size: 50px;
    padding: 50px;
    margin-top: 50px;
    background-color: rgb(212, 255, 255);
}
        button {
    border-radius: 5px;
    background-color:azure;
    font-size: 25px;
    padding: 0;
    text-decoration: none;
}
    </style>
<body>
    <div style=""><a href="index.html"><button class="button">sair</button></a>
        <?php
        session_start();
        include 'php/conexao.php';
        if (isset($_SESSION['id'])) {
                $id = $_SESSION['id'];
                $sql = "SELECT * FROM tb_user WHERE id_usuario = $id";
                $query = $conexao->query($sql);
                $resultado = $query->fetch_assoc();
                echo $resultado['nome'];
                } else{
                 echo "<script>alert('Usuário precisar logar'); history.back();</script>";
                }
        ?>
    </div>
    <h1>Bem-vindo ao Sistema!</h1>
    <p>Escollha uma das opções abaixo:</p>

    <a href="Categoria.php"><button class="button">Cadastro de categorias</button></a>
    <a href="Lançamento.php"><button class="button">Lançamentos</button></a>

</body>
</html>