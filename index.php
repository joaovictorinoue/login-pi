<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark  border-bottom shadow-sm" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">MobileMasters</a>
      <div>
        <ul class="navbar-nav flex-grow-1">
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php">Produtos</a>
          </li>
        </ul>
      </div>
    </div>
    <div>
      <ul class="navbar-nav flex-grow-1">
        <li class="nav-item">
          <a class="nav-link btn btn-primary text-primary" href="cadastrar.php">CADASTRAR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-success text-success" href="menu-login.php">ENTRAR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
      </ul>
    </div>
  </nav>
  <a href="#"><img src="https://www.centerlux.com.br/wp-content/uploads/2020/11/BANNER-1-SITE.jpg" style="width: 100%;" alt="Welcome"></a>

  <div class="container">
    <div class="row">
      <?php
      include "conexao.php";

      $sql_buscar = "select * from produto";

      $todos_os_produtos = mysqli_query($conexao, $sql_buscar);

      while ($um_produto = mysqli_fetch_array($todos_os_produtos)) :
      ?>
        <div class="col-md-3 text-center mt-4">
          <img src="<?php echo $um_produto["foto"]; ?>" alt="Celular" class="img-fluid mb-3 style=" object-fit: cover; width=75%; object-position: top center;>
          <h3><?php echo $um_produto["nome"]; ?></h3>
          <h6 class="mt-3 mb-3"><?php echo $um_produto["descricao"]; ?></h6>
          <a href="ver-produto.php" class="btn btn-outline-primary mt-3">Ver Mais</a>
        </div>
      <?php
      endwhile;
      mysqli_close($conexao);
      ?>

    </div>
  </div>

  <?php

  include "rodape.php";
  ?>