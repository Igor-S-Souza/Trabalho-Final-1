<?php 
include('../BANCO/conexao.php');
$id = $_GET['id'];

$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];

if ($senha == $conf_senha) {
	$alterando = mysqli_query($conexao,"UPDATE usuario_por_setor SET senha = '$conf_senha'");
	if (isset($alterando)){
		$_SESSION['msg_senha_sucesso'] = "<p class ''>Senha alterada com sucesso!</p>";
		header("location:usuario_setor.php");
	}
}else{
	$_SESSION['msg_senha_erro'] = "<p class ''>As senhas não coincidem!</p>";
	header("location:alterar_senha.php?id= $id");
}

 ?>