<?php 
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
	<form method="POST" action="alterando_senha_usuario.php?id=<?php echo $id;?>">
		<label>Nova senha:</label><br>
		<input type="password" name="senha"><br><br>
		<label>Confirme a nova senha:</label><br>	
		<input type="password" name="conf_senha"><br><br>
		<input type="submit" name="enviar">
	</form>
</center>
</body>
</html>