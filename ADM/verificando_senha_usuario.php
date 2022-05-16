<?php 
include('../BANCO/conexao.php');

$id = $_GET['id'];

$senha = $_POST['senha'];

$selecionando = mysqli_query($conexao, "SELECT senha FROM usuario_por_setor WHERE id = '$id'");
while ($campo = mysqli_fetch_array($selecionando)) {
 	$senha2 = $campo['senha'];

if ($senha == $senha2 ) {
	header("location:alterar_senha.php?id=$id");
}else{
	header("location:editar_senha_usuario.php?id=$id");
}
 ?>
 <?php } ?>