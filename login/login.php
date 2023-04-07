<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="tela-login">
        <h1>Login</h1>
        <form action="index.php" method="post">
            <input type="text" placeholder="Usuário">
            <br><br>
            <input type="text" placeholder="Senha">
            <br><br>
            <button type="submit" name="enviar">Entrar</button>
            <br><br>
            <p class="p">Não tem Conta?</p>
            <button type="button"><a href="#" class="a">Cadastre-se</a></button>
        </form>
    </div>
</body>

</html>