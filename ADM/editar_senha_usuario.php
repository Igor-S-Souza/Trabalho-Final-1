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
<form method="POST" action="verificando_senha_usuario.php?id=<?php echo $id ?>">
  <br>
  <br>
  <br>
  <label class="titulo_senha">SENHA ATUAL:</label><br>
  <input type="password" class="input_senha" name="senha" placeholder="         Valide sua senha"><br><br><br><br>
  <input type="submit" class="submit_senha" name="enviar">
</form>
</div>
</center>
</body>
</html>
