<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="tela-login">
        <h1>Login</h1>
        <?php 
        $mensagem = $_GET["msg"] ?? "";
        if($mensagem == "erro"){
          echo "<em>Usuário ou Senha Inválido </em>";
        }
        ?>
        <form action="login.php" method="post">
            <input type="text" name="email" placeholder="Email" required>
            <br><br>
            <input type="password" name="senha" placeholder="Senha" required>
            <br><br>
            <button type="submit"><a href="login.php" class="a">Entrar</a></button>
            <br><br>
            <p class="p">Não tem Conta?</p>
            <button type="submit"><a href="cadastrar.php" class="a">Cadastre-se</a></button>
        </form>
        
    </div>
</body>

</html>