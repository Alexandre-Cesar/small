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
	<style type="text/css">
		input, select{
			padding: 10px; 
			margin: 5px;}
	</style>
</head>
<body>
	<h1><?=$resul?></h1>
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
        <input type="submit" name="btnCalcular" value="Calcular"></form>
</body>
</html>