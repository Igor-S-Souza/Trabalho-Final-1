<!DOCTYPE html>
<html>
<head>
	<?php include ('../BANCO/conexao.php'); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table>
	<tr>
		<td>
			NOME
		</td>
		<td>
			SETOR	
		</td>
		<td>
			USUÁRIO
		</td>
		<td>
			EDITAR
		</td>
		<td>
			EXCLUIR
		</td>
		<td>
			ATUALIZAR SENHA
		</td>
	</tr>
<?php 
	$selecionando = mysqli_query($conexao, "SELECT * FROM usuario_por_setor ORDER BY id");
	WHILE($campo = mysqli_fetch_array($selecionando)){
		 $id = $campo['id'];
		 $nome = $campo['nome'];
		 $setor = $campo ['setor'];
		 $login = $campo['login'];
 ?>
	<tr>
		<td>
			<?php echo $nome; ?>
		</td>
		<td>
			<?php echo $setor; ?>
		</td>
		<td>
			<?php echo $login; ?>
		</td>
		<td>
			<a href="editar_usuario.php?id=<?php echo $id; ?>">editar</a>
		</td>
		<td>
			<a href="excluir_usuario.php?id=<?php echo $id; ?>">excluir</a>
		</td>
		<td>
			<a href="editar_senha_usuario.php?id=<?php echo $id; ?>">Atualizar senha</a>
		</td>
	</tr>
</table>
<?php } ?>
</body>
</html>