<?php
include ("../DADOS_USUARIO/dados_de_usuario.php");
//incluindo o banco de dados do site
include('../BANCO/conexao.php');

//recebendo o id do usuário
$id = $_GET['id'];

//recebendo a senha e a validação de senha do usuário
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];

//verificando se as duas senhas são iguais
if ($senha == $conf_senha) {
	//alterando a senha do usuário
	$alterando = mysqli_query($conexao,"UPDATE usuario_por_setor SET senha = '$conf_senha' WHERE id ='$id' ");
	//se a senha foi inserida com sucesso
	if (isset($alterando)){
		$_SESSION['msg_senha_sucesso'] = "<p class ''>Senha alterada com sucesso!</p>";
		header("location:usuario_setor.php");
	//caso de algo de errado na hora de inserir a senha nova na tabela usuario_por_setor
	}else{
		$_SESSION['msg_senha_erro2'] = "<p class ''>Algo deu errado!</p>";
		header("location:alterar_senha.php?id= $id");
	}
//se as senhas não forem iguais
}else{
	$_SESSION['msg_senha_erro'] = "<p class ''>As senhas não coincidem!</p>";
	header("location:alterar_senha.php?id= $id");
}

 ?>
