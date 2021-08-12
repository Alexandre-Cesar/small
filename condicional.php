<?php 
$num = filter_input(INPUT_POST,"num");

if ($num % 2 == 0) {
	echo "<h1>o numero ".$num." é um numero par</h1>";
}
if ($num % 2 ==1) {
	echo "<h1>o numero ".$num." é um numero impar</h1>"; 
}
 else {
	echo "<h1>digite um numero</h1>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>par ou impar?</title>
</head>
<body>
<form method="post">
	<label>
	<input type="text" name="num">
	</label>
	<br>
	<label>
		 <input type="submit" name="btnCalcular" value="Verificar">
	</label>
</form>

</body>
</html>