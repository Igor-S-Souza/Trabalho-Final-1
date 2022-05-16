<?php 
//incluindo o banco de dados do site
include('../BANCO/conexao.php');

//recebendo o id do usuário
$id = $_GET['id'];

//recebendo as informações novas inseridas pelo usuário
$nome = $_POST['nome'];
$setor = $_POST['setor'];
$contato = $_POST['contato'];

//alterando as informações do usuário
$alterando = mysqli_query($conexao, "UPDATE usuario_por_setor SET contato = '$contato', nome = '$nome', setor = '$setor' WHERE id = '$id'");
//se o usuário foi alterado com sucesso
if (isset($alterando)){
	$_SESSION['msg_usuario_alterado'] = "<p class''> Usuário alterado com sucesso</p>";
	header('location:usuario_setor.php');
//caso o usuário não tenha sido alterado
}else{
	$_SESSION['msg_usuario_nao_alterado'] = "<p class''> Usuário não alterado</p>";
	header('location:usuario_setor.php');
 }
 ?>
