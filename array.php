<?php
$nota [0] = filter_input(INPUT_POST,"num1");
$nota [1]= filter_input(INPUT_POST,"num2");
$nota [2] = filter_input(INPUT_POST,"num3");
$smtotal = 0 ;

for ($i=0; $i <(count($nota)) ; $i++) { 
	$smtotal += $nota[$i];
}

$resultado = $smtotal/count($nota);

if ($resultado >= 6) {
	echo "aprovado com media de {$resultado}";
}

 if ($resultado > 1 && $resultado < 6) {
 	echo "reprovado com media de {$resultado}";
 }
else {
	echo "<br>Digite as notas";
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form method="post">
	<label>
	<input type="text" name="num1">
	</label>
	<br>
	<label>
	<input type="text" name="num2">
	</label>
	<br>
	<label>
	<input type="text" name="num3">
	</label>
	<br>
	<label>
		 <input type="submit" name="btnCalcular" value="Verificar">
	</label>
</form>
</body>
</html>
