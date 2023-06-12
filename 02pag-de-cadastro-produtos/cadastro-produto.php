<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Projeto De Software </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        h1,
        form {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <h1>Cadastro de Despesas</h1>


    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="descricao">Descrição:</label>

        <input type="text" name="descricao" id="descricao" required>
        <br>
        <br>
        <label for="valor">Valor:</label>
        <input type="number" step="0.01" name="valor" id="valor" required>
        <br>
        <br>
        <label for="data">Data:</label>
        <input type="date" name="data" id="data" required>
        <br>
        <br>
        <input type="submit" value="Cadastrar">
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os valores do formulário
        $descricao = $_POST["descricao"];
        $valor = $_POST["valor"];
        $data = $_POST["data"];

        // Realiza o processamento ou salvamento dos dados no banco de dados
        // Aqui você pode adicionar a lógica para armazenar as despesas em um banco de dados

        // Exibe uma mensagem de sucesso
        echo "<p>Despesa cadastrada com sucesso!</p>";
    }
    ?>


</body>

</html>