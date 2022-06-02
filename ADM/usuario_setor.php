<?php 
include ("../DADOS_USUARIO/dados_de_usuario.php");
 ?>
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
<a href="menu.php"><img src="../IMAGENS/logo.svg" style="max-width : 100%; height :200px; margin-top:  1% "></a>
	<br>
	<br>
	</center>
	<h2 style="margin-left:5.5%; margin-bottom: -5%;" >USUÁRIOS:</h2>

		<div>
			<a href="adicionar_usuario_setor.php"><img src="../IMAGENS/adicionar_usuario.png" class="imagem_adicionar_usuario"></a>
		</div>
<div class="">
<center>
<div class="div_tabela_andamento">
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
		<td class="td_editar2">
			EDITAR
		</td>
		<td class="td_excluir2">
			EXCLUIR
		</td>
		<td class="td_atualizar_senha2">
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
		<td class="td_editar">
			<a href="editar_usuario.php?id=<?php echo $id; ?>"><img src="../IMAGENS/lapis.png" class="lapis"></a>
		</td>
		<td class="td_excluir">
			<a href="excluir_usuario.php?id=<?php echo $id; ?>"><img src="../IMAGENS/lixeira_fechada.png" class="lixeira"></i></a>
		</td>
		<td class="td_atualizar_senha">
			<a href="editar_senha_usuario.php?id=<?php echo $id; ?>"><img src="../IMAGENS/password.png" class="imagem_cadeado"></a>
		</td>
	</tr>
	<?php } ?>
</table>
</div>
<div id="abrirModal" class="fundo2">


<div>
</center>
</div>
</body>
</html>