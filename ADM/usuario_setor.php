<!DOCTYPE html>
<html>
<head>
	<?php include ('../BANCO/conexao.php'); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
	<script src="https://kit.fontawesome.com/875bd3d356.js" crossorigin="anonymous"></script>
	<title></title>
</head>
<body class="corpo">
	<center>
	<div class="div_nome_empresa">
		<br>
		<h1>Nome da empresa</h1>
		<br>
	</div>
	<br>
	<br>
	<h2>USUÁRIOS</h2>
	</center>
<div class="">
<center>
<table class="tabela">
	<tr class="tr">
		<td class="td">
			NOME
		</td>
		<td class="td">
			SETOR	
		</td>
		<td class="td">
			USUÁRIO
		</td>
		<td class="td">
			EDITAR
		</td>
		<td class="td">
			EXCLUIR
		</td>
		<td class="td">
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
	<tr class="tr2">
		<td class="td2">
			<?php echo $nome; ?>
		</td>
		<td class="td2">
			<?php echo $setor; ?>
		</td>
		<td class="td2">
			<?php echo $login; ?>
		</td>
		<td class="td2">
			<a href="editar_usuario.php?id=<?php echo $id; ?>"><i class="fa-solid fa-pencil"></i></a>
		</td>
		<td class="td2">
			<a href="excluir_usuario.php"><i class="fa-solid fa-trash-can"></i></a>
		</td>
		<td class="td2">
			<a href="editar_senha_usuario.php?id=<?php echo $id; ?>">Atualizar senha</a>
		</td>
	</tr>
</table>
<div id="abrirModal" class="fundo2">


<div>
</center>
</div>
<?php } ?>
</body>
</html>