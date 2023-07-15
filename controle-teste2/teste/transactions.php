<?php
// Aqui você precisará implementar a lógica de acesso ao banco de dados ou qualquer outra forma de armazenamento dos dados das transações.

// Por simplicidade, neste exemplo, armazenaremos as transações em um array.
$transacoes = [
  ['Transação 1', 100],
  ['Transação 2', -50],
  ['Transação 3', 200]
];

// Exibir as transações na tabela.
foreach ($transacoes as $transacao) {
  echo '<tr>';
  echo '<td>' . $transacao[0] . '</td>';
  echo '<td>' . $transacao[1] . '</td>';
  echo '</tr>';
}
?>
