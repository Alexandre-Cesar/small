<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>escolha</title>
	<link rel="stylesheet" href="estilo2.css">
</head>
<body>
<form method="post">
	<div class="e">
   		<label><h1>Escolha uma cor</h1>
			<select name="escolha">
				<option value="default"> escolha</option>
				<option value="vermelho">vermelho</option>
				<option value="azul">azul</option>
				<option value="verde">verde</option>
				<option value="amarelo">amarelo</option>
			</select><br>
       </label><br>
        <input type="submit"  value="Enviar" class="enviar"><br>


	<?php
	$escolha = filter_input(INPUT_POST, "escolha");
	$cor = "";

switch ($escolha) {
	case 'vermelho':
		$cor = "Ultima escolha foi Vermelho";
		break;
		case 'verde':
			$cor = "Ultima escolha foi Verde, muito boa escolha";
			break;
		case 'azul':
			$cor = " Ultima escolha foi azul";
			break;
			case 'amarelo':
				$cor = "Ultima escolha foi Amarelo";
				break;
	
	default:
		$cor = "nenhuma cor foi escolhida ainda";
		break;
}

	?>
			<h2><?= $cor?></h2>
	</div>
</form>


</body>
</html>