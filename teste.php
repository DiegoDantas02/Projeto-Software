<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login</title>
  <style>
    body {
      background-color: #f1f1f1;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      width: 400px;
      padding: 40px;
      background-color: #fff;
      border: 2px solid #ccc;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h1 {
      text-align: center;
      color: #333;
      font-size: 24px;
      margin-bottom: 30px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      color: #555;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }

    .button {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
    }

    .button:hover {
      background-color: #45a049;
    }

    .error-message {
      color: red;
      font-size: 14px;
      margin-top: 10px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Tela de Login</h1>
    <form>
      <label for="username">Usuário:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Senha:</label>
      <input type="password" id="password" name="password" required>

      <input class="button" type="submit" value="Entrar">

      <p class="error-message">Usuário ou senha inválidos.</p>
    </form>
  </div>
</body>

</html>
