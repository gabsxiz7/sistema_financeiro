<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
</head>
<body>
        <!-- Navbar -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Lista de Usuarios</a>
  </div>
</nav>

    <div class="container mt-5">
            <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Cargo</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
          <?php
          //iniciar sessão e incluir conexão session_start();
          include 'conexao.php';

          //verificar se usuário está logado 
          if (!isset($_SESSIO['id'])) {
            echo "<script>alert('Usuário precisa esta logado'); history.back();</script>";
            exit();
          }        
          
        //buscar usuários no banco
        $sql = "SELECT * FROM tb_user";
        $query = $conexao->query ($sql);

        //exibir os dados na tabela
        while ($row = $query->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row['id_usuario'] . "</td>";
          echo "<td>" . $row['nome']  . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>" . $row['cargo'] . "</td>";
          echo "<td><a href='editar_usuario.php?id=" . $row['id_usuario'] . "'class='btn btn-warning btn-sm'>Editar</a></td>";
          echo "<td><a href='excluir_usuario.php?id=" . $row['id_usuario'] . "'class='btn btn-danger btn-sm'>Excluir</a></td>";
          echo "</tr>";  
        }
        ?>
        </tbody>
        </table>

    </div>
    <script src="<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>