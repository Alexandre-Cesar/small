<?php 

include 'conexao.php';

/*criar variaveis correspondendo as linhas da tabela criada no banco de dados*/
$id_carro = $_POST['id_carro'];
$marca = $_POST['nmarca'];
$ano = $_POST['ano'];

#comando em SQL
$query = "UPDATE CARROS SET marca = '$marca', ano = '$ano' WHERE id_carro = $id_carro";
mysqli_query($conexao, $query);

header('location: index.php?pagina=carros');
