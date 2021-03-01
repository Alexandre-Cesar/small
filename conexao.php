<?php 
#criar variaveis com nome do servidor, usuario, senha e nome do banco de dados

$servidor = 'localhost';
$user = "root";
$senha = "";
$db = "10";

#fazer variavel para realizar a conexão com o servidor por meio do mysqli_connect
$conexao = mysqli_connect($servidor, $user, $senha,$db);

#variavel com o comando de consultas ao banco de dados
$query = "SELECT * TABELA";

#realizar consulta atraves do comando mysqli_query e utilizando as variaveis de conexão e de consulta ao banco de dados 
$consulta_cursos = mysqli_query($conexao,$query);

#uma condicional para saber se o codigo funcionou corretamente
if ($consulta_alunos) {
	echo "banco conectado com sucesso";
}
else{
	echo "não foi possivel realizar conexão";
}
?>
