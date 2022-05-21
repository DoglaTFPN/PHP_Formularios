<?php 

	echo "<h3> Recuperando os dados - POST</h3>";
	$user = $_POST['nome'];
	$pass = $_POST['senha'];

	if ($user =="etecia" && $pass == "etecia238") {
		echo "<b>Autenticação realizada com sucesso!!!</b>";
	}else{
		echo "<b>Você não tem permissão para visualizar essa página</b>";
	}
 ?>