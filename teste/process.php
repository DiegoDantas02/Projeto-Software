<?php
// Aqui você precisará implementar a lógica para processar a submissão do formulário e adicionar a nova transação ao armazenamento de dados.

// Por simplicidade, neste exemplo, apenas exibimos a transação enviada pelo formulário.
$transacao = $_POST['transacao'];
$valor = $_POST['valor'];

echo '<h2>Transação Adicionada:</h2>';
echo '<p><strong>Transação:</strong> ' . $transacao . '</p>';
echo '<p><strong>Valor:</strong> ' . $valor . '</p>';
?>
