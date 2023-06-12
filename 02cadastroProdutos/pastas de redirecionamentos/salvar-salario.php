<?php
//receber as informações
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];

echo $nome . $sobrenome;

//dados da conexão
$bd_usuario = "root";
$bd_senha = "";
$bd_nome_do_banco = "bd_financa";
$bd_servidor = "localhost";


//abrir a conexão
$conexao = mysqli_connect($bd_servidor, $bd_usuario, $bd_senha, $bd_nome_do_banco);



//criar o sql inserir
$sql = "insert into t_cliente(data, nome_da_empresa) values('$data', '$nome_da_empresa')";

//executar o sql no banco
mysqli_query($conexao, $sql);

//fechar a conexão
mysqli_close($conexao);

//redirecionar para a página de listagem
header('location:salario.php');
?>