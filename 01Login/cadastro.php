<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<div>
    <img src="../img/logo.png" alt="imagem do logo da empresa">

</div>

<body>
   
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url(../img/TELADELOGIN.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            overflow: hidden;
        }


        .container {
            width: 350px;
            margin: 0 auto;
            padding: 150px;
            background-color: darkgray;
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 150px;
            margin-left: center;

        }

            .container input[type="text"],
            .container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: #fff;
            border-radius: 3px;
            cursor: pointer;
        }

        .container button:hover {
            background-color: #45a049;
        }
    </style>
    </head>

    <body>
        <div class="container">

            <h1> CADASTRO </h1>

            <br>
            <br>
            <br>

            <form method="POST" action="login.php">
                <input type="text" name="username" placeholder="Nome de usuário" required>
                <br>
                <input type="password" name="password" placeholder="Senha" required>
                <br>
                <input type="name" name="nome" placeholder="Fortuna Company" required>
                <br>
                <input type="email" name="email" placeholder="email@fortuna.com.br" required>
                <br>
                <input type="celular" name="celular" placeholder="celular" required>
                <br>
                <button type="submit">REGISTRAR</button>
            </form>

            <p>Já tem conta? <a href="login.php">Faça Login</a></p>
        </div>
        

    </body>

</html>