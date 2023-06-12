<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Processamento do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST["date"];
    $amount = $_POST["amount"];
    $category = $_POST["category"];
    $type = $_POST["type"];

    // Insere os dados no banco de dados
    $sql = "INSERT INTO transactions (date, amount, category, type) VALUES ('$date', '$amount', '$category', '$type')";

    if ($conn->query($sql) === TRUE) {
        echo "Transação registrada com sucesso.";
    } else {
        echo "Erro ao registrar a transação: " . $conn->error;
    }
}

// Fecha a conexão com o banco de dados
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Transações</title>
</head>
<body>
    <h2>Formulário de Transações</h2>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="date">Data:</label>
        <input type="date" name="date" required><br><br>

        <label for="amount">Valor:</label>
        <input type="number" name="amount" step="0.01" required><br><br>

        <label for="category">Categoria:</label>
        <select name="category" required>
            <option value="cartao">Cartão</option>
            <option value="dinheiro">Dinheiro</option>
        </select><br><br>

        <label for="type">Tipo de Transação:</label>
        <select name="type" required>
            <option value="despesa">Despesa</option>
            <option value="receita">Receita</option>
        </select><br><br>

        <input type="submit" value="Registrar Transação">
    </form>
</body>
</html>
