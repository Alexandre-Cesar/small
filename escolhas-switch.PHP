<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>escolha</title>
</head>
<body>
<form method="post">

   <label>Operação:
         <select name="escolha">
           <option value="vermelho">vermelho</option>
           <option value="azul">azul</option>
           <option value="verde">verde</option>
           <option value="amarelo">amarelo</option>
         </select>
       </label><br>
        <input type="submit"  value="Enviar">
</form>
	<?php

	$cor1 = filter_input(INPUT_POST, 'vermelho');
	$escolha = filter_input(INPUT_POST, "escolha");


$cor = "vermelho";
switch ($escolha) {
	case 'vermelho':
		echo "vermelho?";
		break;
		case 'verde':
			echo "boa escolha";
			break;
		case 'azul':
			echo "nhaa... azul é uma boa ainda";
			break;
	
	default:
		echo "isso ai..";
		break;
}

	?>


</body>
</html>