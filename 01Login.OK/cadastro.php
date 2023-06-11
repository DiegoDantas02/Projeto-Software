<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<div>
    <img src="../img/logo.png" alt="imagem do logo da empresa" class="logo">

</div>

<body>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(../img/contabilidade.png);
            background-size: cover;
            background-repeat: no-repeat;
            overflow: hidden;
            height: 1200px;

        }


        .container {
            width: 350px;
            margin: 0 auto;
            padding: 60px;
            background-color: black;
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 120px;
            margin-left: center;

        }

        .c2 {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;

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

        .escritas {
            margin-left: -200px;
        }

        .escrita {
            margin-left: -250px;
        }

        .escrit {
            margin-left: -300px;
        }

        .logo {
            position: flex;
            top: 20px;
            left: 20px;
            width: 200px;

        }
    </style>
    </head>

    <body>
        <div class="container">

            <h1> <strong>CADASTRO</strong> </h1>

            <br>
            <br>
            <br>

            <form method="POST" action="login.php">
                <div class="escrita">Nome Login:</div>
                <input type="text" name="username" placeholder="Fortuna Company" required>
                <br>
                <div class="escrit">Senha:</div>
                <input type="password" name="password" placeholder="Senha" required>
                <br>
                <div class="escritas">Nome da Empresa:</div>
                <input type="name" name="nome" placeholder="Fortuna Company" class="c2" required>
                <br>
                <div class="escrit">E-mail:</div>
                <input type="email" name="email" placeholder="email@fortuna.com.br" class="c2" required>
                <br>
                <div class="escritas">Número de contato:</div>
                <input type="number" name="celular" placeholder="celular" class="c2" required>
                <br>
                <br>
                <button type="submit">REGISTRAR</button>
            </form>

            <p>Já tem conta? <a href="login.php">Faça Login</a></p>
        </div>


    </body>

</html>