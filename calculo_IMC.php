<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculo IMC</title>
</head>
<body>
	<?php 
	echo "Seu IMC foi calculador";
	echo "<br/>";

	$peso = $_POST['peso'];
	$altura = $_POST['altura'];

	echo "<b>Seu peso é: </b>".$peso;
	echo "<br/>";
	echo "<b>Sua altura é: </b>".$altura;

	$IMC = $peso / ($altura * $altura);

	echo "<br/>";
	echo "<b>Seu IMC é igual a: ".$IMC;
	echo "<br/>";

	if ($IMC > 25) {
		echo '<img src="giga.jpeg">';
	}else echo "Você está saudável!";
		echo "<br/>";
		echo '<img src="saudavel.jpeg" width="25%">';
 ?>
</body>
</html>