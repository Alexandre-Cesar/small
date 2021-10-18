<?php
$num1 = filter_input(INPUT_POST, "numero1");
$num2 = filter_input(INPUT_POST, "numero2");
$opera = filter_input(INPUT_POST, "slOperacao");
$resul ="";
if ($num1 && $num2) {	
	switch ($opera) {
		case '+':
			$resul = ($num1 + $num2);
			break;

		case '-';
			$resul = ($num1 - $num2);
			
			break;

		case '*';
			$resul = ($num1 * $num2);

			break;

		case '/':
			$resul = ($num1 / $num2);
			break;

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CALCULADORA</title>
	<link rel = "stylesheet" href ="estilo.css">
</head>
<body>

	<div>
<form method="post">
<label>1°Numero: <input type="text" name="numero1"></label><br>
<label>2°Numero: <input type="text" name="numero2"></label><br>
   <label>Operação:
         <select name="slOperacao">
           <option value="+">Adição</option>
           <option value="-">Subtração</option>
           <option value="*">Multiplicação</option>
           <option value="/">Divisão</option>
         </select>
       </label><br>
        <input type="submit" name="btnCalcular" value="Calcular" class = "calcular"></form>
		<h1>Total: <?=$resul?></h1>
	</div>
</body>
</html>