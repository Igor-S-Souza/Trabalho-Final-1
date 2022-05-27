<?php
include ("../DADOS_USUARIO/dados_de_usuario.php");

$id = $_GET['id'];
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
    <div class="div_altsenha">
	<form method="POST" action="alterando_senha_usuario.php?id=<?php echo $id;?>">
    <br>
    <br>
		<label class="titulo_senha">NOVA SENHA:</label>
		<input type="password" class="input_alteracao" name="senha" placeholder="   defina uma nova senha"><br><br><br>
		<label class="titulo_senha">CONFIRME:</label>
	  <input type="password" class="input_alteracao" name="conf_senha" placeholder="   confirme a nova senha"><br><br><br>
		<input type="submit" class="submit_senha" name="enviar">
	</form>
</center>
</body>
</html>
