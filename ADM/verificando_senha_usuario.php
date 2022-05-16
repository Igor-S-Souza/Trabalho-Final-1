<?php 
//incluindo o banco de dados do site
include('../BANCO/conexao.php');

//recebendo o id do usuário
$id = $_GET['id'];

//recebendo a senha do usuário
$senha = $_POST['senha'];

//selecionando a senha do usuário e armazenando
$selecionando = mysqli_query($conexao, "SELECT senha FROM usuario_por_setor WHERE id = '$id'");
while ($campo = mysqli_fetch_array($selecionando)) {
 	$senha2 = $campo['senha'];

//se as senhas forem iguais 
if ($senha == $senha2 ) {
	header("location:alterar_senha.php?id=$id");
//se as senhas não forem iguais
}else{
	header("location:editar_senha_usuario.php?id=$id");
}
 ?>
 <?php } ?>