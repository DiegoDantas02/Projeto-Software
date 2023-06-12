<?php
//receber as informações
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$salario = $_POST["salario"];
$nome_empresa = $_POST["nome_empresa"];

echo $nome . $sobrenome;

//dados da conexão
$bd_usuario = "root";
$bd_senha = "";
$bd_nome_do_banco = "projeto_software";
$bd_servidor = "localhost";


//abrir a conexão
$conexao = mysqli_connect($bd_servidor, $bd_usuario, $bd_senha, $bd_nome_do_banco);



//criar o sql inserir
$sql = "insert into db_cadastro(nome, sobrenome, nome_empresa, salario) values('$nome', '$sobrenome', '$salario', '$nome_empresa')";

//executar o sql no banco
mysqli_query($conexao, $sql);

//fechar a conexão
mysqli_close($conexao);

//redirecionar para a página de listagem
header('location:salario.php');
?>