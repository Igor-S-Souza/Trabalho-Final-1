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
	<title></title>
</head>
<body>
<?php 
$selecionando = mysqli_query($conexao, "SELECT * FROM usuario_por_setor WHERE id ='$id'");
while ($campo = mysqli_fetch_array($selecionando)) {
	$login = $campo['login'];
	$nome = $campo['nome'];
	$setor = $campo['setor'];
	$contato = $campo['contato'];
}
 ?>
<form method="POST" action="editando_usuario.php?id=<?php echo $id ?>">
	<label>Login:</label><br>
	<input type="text" name="login" value="<?php echo $login; ?>" disabled><br><br>
	<label>Nome:</label><br>
	<input type="text" name="nome" value="<?php echo $nome; ?>"><br><br>
	<label>Setor:</label><br>
	<input type="text" name="setor" value="<?php echo $setor; ?>"><br><br>
	<label>Contato:</label><br>
	<input type="text" name="contato" value="<?php echo $contato; ?>"><br><br>
	<input type="submit" name="enviar">
</form>
</body>
</html>