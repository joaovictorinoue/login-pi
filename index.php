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
  <nav class="navbar navbar-expand-lg bg-dark bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MobileMasters</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="menu.php">Sair</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
          <a class="btn btn-outline-primary" href="menu.php">Login</a>
        </form>
      </div>
    </div>
  </nav>
  <a href="descontos.php"><img src="https://www.centerlux.com.br/wp-content/uploads/2020/11/BANNER-1-SITE.jpg" style="width: 100%;"alt="Welcome"></a>
  <div class="container">
    <div class="row">
      <?php 
      include "conexao.php";

      $sql_buscar = "select * from produto";

      $todos_os_produtos = mysqli_query($conexao, $sql_buscar);

      while($um_produto = mysqli_fetch_array($todos_os_produtos)) :
        ?>
        <div class="col-md-3 text-center mt-4">
          <img src="<?php echo $um_produto["foto"]; ?>" alt="Celular" class="img-fluid mb-3 style="object-fit: cover; width=75%; object-position: top center;>
          <h3><?php echo $um_produto["nome"]; ?></h3>
          <h6 class="mt-3 mb-3"><?php echo $um_produto["descricao"];?></h6>
          <a href="ver-produto.php" class="btn btn-outline-primary mt-3">Ver Mais</a>
        </div>
      <?php 
      endwhile;
      mysqli_close($conexao);
      ?>
            
    </div>
  </div>
  <nav class="navbar navbar-expand-lg bg-dark bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="menu.php">Contatos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <?php

  include "rodape.php";
  ?>