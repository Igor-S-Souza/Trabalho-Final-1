<?php

include ("../DADOS_USUARIO/dados_de_usuario.php");

include('../BANCO/conexao.php');

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
<?php
$selecionando = mysqli_query($conexao, "SELECT * FROM usuario_por_setor WHERE id ='$id'");
while ($campo = mysqli_fetch_array($selecionando)) {
	$login = $campo['login'];
	$nome = $campo['nome'];
	$setor = $campo['setor'];
	$contato = $campo['contato'];
}
 ?>
 <center>
 <div class="editar_usuario">
<form method="POST" action="editando_usuario.php?id=<?php echo $id ?>">
  <br>
	<label class="titulo_senha">Login:</label><br>
	<input type="text" name="login" value="<?php echo $login; ?>" disabled><br><br>
	<label class="titulo_senha">Nome:</label><br>
	<input type="text" name="nome" value="<?php echo $nome; ?>"><br><br>
	<label class="titulo_senha">Setor:</label><br>
	<input type="text" name="setor" value="<?php echo $setor; ?>"><br><br>
	<label class="titulo_senha">Contato:</label><br>
	<input type="text" name="contato" value="<?php echo $contato; ?>"><br><br>
	<input type="submit" name="enviar" class="submit_senha">
</div>
</center>
</form>
</body>
</html>
