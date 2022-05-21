<?php 

	echo "<h3>Área e perímetro do retângulo</h3>";
	$base = $_POST['base'];
	$altura = $_POST['altura'];
	$area = $base * $altura;
	$perimetro = $base * 2 + $altura * 2;

	
	echo "<b>Área: </b>".$area;
	echo "<br/>";
	echo "<b>Perímetro: </b>".$perimetro;

 ?>