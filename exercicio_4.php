<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recebendo dados</title>
</head>
<body>

	<form name="Cadastro" method="POST" action="exercicio_4_recebendo_dados.php">

		<strong>O que você achou do site?</strong>
		<br>
		<input type="radio" name="mb" value="Muito bom">
		<label>Muito bom</label>
		<input type="radio" name="mb" value="Bom">
		<label>Bom</label>
		<input type="radio" name="mb" value="Regular">
		<label>Regular</label>

		<br><br>
		<strong>Do que mais gostou?</strong>
		<br><br>
		<select name="achou">
			<option value="cartaz">Em cartaz</option>
			<option value="visual">Visual</option>
			<option value="efic" selected="true">Eficiência</option>
			<option value="nada">Nada</option>
		</select>
		<label>Outro: </label>
		<input type="text" name="outro">
		<br><br>
		<strong>Diga seus comentários no campo abaixo:</strong>
		<br/>
		<textarea name="comentario" cols="50" rows="8">
			
		</textarea>
		<br/><br/>

		<strong>Diga-nos como entrar em contato com você:</strong>
		<br>
		Nome
		<input type="text" name="nome">
		<br>
		<br>
		E-mail
		<input type="text" name="email">
		<br>
		<br>
		Fone
		<input type="text" name="fone">
		<br><br>
		<input type="checkbox" name="notificacao"> Quero receber notificações por e-mail
		<br><br>
		<input type="submit" name="ENVIAR">
		<button onclick="document.Cadastro.reset()">Limpar</button>
	</form>


</body>
</html>