<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="Background.css">
</head>

<body class="fundo">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark  border-bottom shadow-sm" data-bs-theme="dark" bg-body-tertiary">
    <div class="container-fluid mt-1 text-center">
      <a class="navbar-brand mt-1" href="#"><img src="https://images-americanas.b2w.io/spacey/acom/2023/02/15/iphone-3787be21d6a7.png" alt="logo" class="alteracao ms-1 pe-1">MobileMasters</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="produtos.php">Produtos</a>
          </li>
        </ul>
        <form class="" role="search">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li>
              <a class="nav-link btn text-primary carrinho border border-primary mx-1 mb-2 me-1" href="cadastrar.php">CADASTRAR</a>
            </li>
            <li>
              <a class="nav-link btn text-success border border-success ms-3 me-4" href="menu-login.php">ENTRAR</a>
            </li>
          </ul>
        </form>
      </div>
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
          <h3 class="text-white"><?php echo $um_produto["nome"]; ?></h3>
          <h6 class="text-white mt-3 mb-3"><?php echo $um_produto["descricao"]; ?></h6>
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