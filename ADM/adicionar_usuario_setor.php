<?php 
include ("../DADOS_USUARIO/dados_de_usuario.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
	<title></title>
</head>
<body class="corpo">
	<center>
		<br>
		<br>
		<h2>ADICIONAR USUÁRIO </h2>
<div class="div_adicionar_usuario">
	<form method="POST" action="adicionando_usuario_setor.php">
		<label class="textos_criar_usuario">Login</label><br>
		<input type="text" name="login" placeholder="Informe o login" class="criar_usuario"><br>
		<label class="textos_criar_usuario">Nome</label><br>
		<input type="text" name="nome" placeholder="Informe o nome" class="criar_usuario"><br>
		<label class="textos_criar_usuario" >Setor</label><br>
		<select name="setor" required="required" class="select_css">
			<optgroup label="Setores">
				<option>ADM</option>
				<option>RH</option>
			</optgroup>
		</select><br>
		<label class="textos_criar_usuario">Contato</label><br>
		<input type="text" name="contato" placeholder="Informe o meio de contato" class="criar_usuario"><br>
		<label class="textos_criar_usuario">Senha</label><br>
		<input type="password" name="senha" placeholder="Informe uma senha" class="criar_usuario"><br><br>
		<input type="submit" name="enviar" class="botao_criar_usuario">
	</form>
	</center>
</div>
</body>
</html>