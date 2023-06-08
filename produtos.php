<?php
include "cabecalho.php"
?>
<body class="fundo">
<!-- <a href="#"><img src="https://www.centerlux.com.br/wp-content/uploads/2020/11/BANNER-1-SITE.jpg" style="width: 100%;" alt="Welcome"></a> -->

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