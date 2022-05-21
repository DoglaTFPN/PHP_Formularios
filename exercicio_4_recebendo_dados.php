<?php 

	if (isset($_POST['mb'])) {
		echo "Você achou o site: ".$_POST['mb'];
		echo "<br/>";
	}
	if (isset($_POST['bom'])) {
		echo "Você achou o site: ".$_POST['bom'];
		echo "<br/>";
	}
	if (isset($_POST['regular'])) {
		echo "Você achou o site: ".$_POST['regular'];
		echo "<br/>";
	}

	if (isset($_POST['cartaz'])) {
		echo "Você achou o site: ".$_POST['cartaz'];
		echo "<br/>";
	}
	if (isset($_POST['visual'])) {
		echo "Você achou o site: ".$_POST['visual'];
		echo "<br/>";
	}
	if (isset($_POST['efic'])) {
		echo "Você achou o site: ".$_POST['efic'];
		echo "<br/>";
	}
	if (isset($_POST['regular'])) {
		echo "Você achou o site: ".$_POST['nada'];
		echo "<br/>";
	}

	$outros = $_POST['outro'];

	echo "<br/> O que mais gostou: ".$outros;

	echo "<br/>";

	//$comentarios = $_POST['comentario'];

	//echo "Comentários feitos: ".$comentarios;

	$user = $_POST['nome'];
	$email = $_POST['email'];
	$fone = $_POST['fone'];

	
	echo "<b>Nome: </b>".$user;
	echo "<br/>";
	echo "<b>email: </b>".$email;
	echo "<br/>";
	echo "telefone: ".$fone;

	echo "<br/>";

	if (isset($_POST['notificacao'])) {
		echo "Você irá receber notificações!";
		echo "<br/>";
	}
?>