<?php 
include('../BANCO/conexao.php');

$id = $_GET['id'];

$nome = $_POST['nome'];
$setor = $_POST['setor'];
$contato = $_POST['contato'];

$alterando = mysqli_query($conexao, "UPDATE usuario_por_setor SET contato = '$contato', nome = '$nome', setor = '$setor' WHERE id = '$id'");
if (isset($alterando)){
	$_SESSION['msg_usuario_alterado'] = "<p class''> Usuário alterado com sucesso</p>";
	header('location:usuario_setor.php');
}else{
	$_SESSION['msg_usuario_nao_alterado'] = "<p class''> Usuário não alterado</p>";
	header('location:usuario_setor.php');
 }
 ?>
