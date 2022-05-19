<?php 
 
include ("../DADOS_USUARIO/dados_de_usuario.php");

$id = $_GET['id'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<center>
<form method="POST" action="verificando_senha_usuario.php?id=<?php echo $id ?>">
	<label>Senha:</label><br>
	<input type="password" name="senha" placeholder="Valide sua senha"><br><br>
	<input type="submit" name="enviar">
</form>
</center>
</body>
</html>