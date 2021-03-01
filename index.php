<?php  

include 'header.php';
include 'db.php';
#conteudo da pagina
if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else $pagina = 'home';
switch ($pagina) {
	
	case 'carros': include 'cursos.php';
		break;

		case 'motos': include 'motos.php';
		break;

		case 'inserir_carro': include 'inserir_carro.php';
		break;

		case 'inserir_moto': include 'inserir_moto.php';
		break;

		default:  include 'home.php';
		break;
}
	include 'footer.php';
?>
