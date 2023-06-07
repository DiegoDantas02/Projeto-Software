<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #222;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("../img/bglogin.svg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .button {
            background-color: limegreen;
            color: white;
            border: none;
            border-radius: 12px;
            padding: 10px 20px;
            cursor: pointer;
            display: flex;
            margin-top: -43px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            justify-content: center;
            height: 100vh;
      
        }

        h1 {
            text-align: center;
            color: white;
            font-size: 50px;
            margin-top: -50px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
        } 

        .error-message {
            color: red;
            text-align: center;
        }
        .login{
            margin-top: -50px;
        }
    </style>

</head>
<div>
    <img src="../img/logo.png" alt="imagem do logo da empresa">
</div>
<body>
    <div class="container">
        <h1 class="login">LOGIN</h1>
        <form method="post" action="login-senha.php">
            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" id="username" placeholder="email@fortuna.com.br" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" placeholder="********" id="password" name="password" required>
            </div>
            <input class="button" type="submit" value="LOGIN">
        </form>

        <form action="cadastro.php" method="POST">
            <input class="button" type="submit" value="CADASTRAR">
        </form>
    </div>

    <?php
    //Verifique se os campos de usuário e senha foram enviados
    if (isset($_POST['username']) && isset($_POST['password'])) {
        //Obtenha os valores dos campos 
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Verifique os detalhes do usuário no banco de dados ou em qualquer outra fonte de dados
        //Aqui, usaremos um exemplo simples com um usuário fixo
        $validUsername = 'usuario';
        $validPassword = 'password';

        if ($username === $validUsername && $password === $validPassword) {
            //Os detalhes de login são válidos, redirecione para a página principal ou execute qualquer ação necessária
            header('Location: pagina_principal.php');
            exit();
        } else {
            //Os detalhes de login são inválidos. Exiba uma mensagem de erro
            echo '<p class="error-message">Usuário ou Senha inválidos.</p>';
        }
    }
    ?>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>
