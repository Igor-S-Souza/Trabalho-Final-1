<?php 
include("../BANCO/conexao.php");

$nome = $_POST['nome'];
$login = $_POST['login'];
echo $login;
$contato = $_POST['contato'];
$setor = $_POST['setor'];
$senha = $_POST['senha'];

$selecionando = mysqli_query($conexao, "SELECT * FROM usuario_por_setor WHERE login = '$login'");
$verificando = mysqli_num_rows($selecionando);
if ($verificando == "0") {

	$inserindo = mysqli_query($conexao, "INSERT INTO usuario_por_setor (contato,senha,login,nome,setor) VALUES ('$contato','$senha','$login','$nome','$setor')");
if (isset($inserindo)) {
	$_SESSION['msg_cadastro_usuario'] = 'Usuário cadastrado com sucesso';
	header("location:usuario_setor.php");
}else{
	$_SESSION['msg_cadastro_erro'] = 'Algo deu errado!';
	header("location:usuario_setor.php");
}
}else{
	$_SESSION['msg_usuario_existe'] = 'Este login já está em uso!';
	header("location:usuario_setor.php");
}

 ?>