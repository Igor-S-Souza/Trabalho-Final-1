<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
	<form method="POST" action="adicionando_usuario_setor.php">
		<label>Login:</label><br>
		<input type="text" name="login" placeholder="Informe o login"><br>
		<label>Nome:</label><br>
		<input type="text" name="nome" placeholder="Informe o nome"><br>
		<label>Setor:</label><br>
		<select name="setor" required="required">
			<optgroup label="setores">
				<option>ADM</option>
				<option>RH</option>
			</optgroup>
		</select><br>
		<label>Contato:</label><br>
		<input type="text" name="contato" placeholder="Informe o meio de contato"><br>
		<label>Senha:</label><br>
		<input type="password" name="senha" placeholder="Informe uma senha"><br><br>
		<input type="submit" name="enviar">
	</form>
	</center>
</body>
</html>