<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">

</head>

<body>

    <?php
    session_start();
    if (isset($_SESSION['cadastro_sucesso'])) {
        echo '<script>alert("Sua conta foi cadastrada com sucesso!");</script>';
        unset($_SESSION['cadastro_sucesso']); // Remove a variável de sessão após exibir o alerta
    }
?>

    <div class="register-photo">
        <div class="form-container">
            <div class="imagemlogin"></div>
            <form method="post">
                <h2 class="text-center"><strong>Entrar na Conta.</h2></strong>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Senha"></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Senha (repetir)"></div>
                
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Entrar na Conta</button></div><a href="index.html" class="ja">Ainda não tem uma conta? Cadastre aqui.</a></form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    

</body>

</html>