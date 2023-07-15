<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];

    // Aqui você pode adicionar sua lógica para armazenar o registro em um banco de dados ou qualquer outra ação necessária

    // Após processar o registro, redirecione o usuário para a página inicial
    header('Location: index.php');
    exit();
  }
?>
