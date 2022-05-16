<?php 
include ('../BANCO/conexao.php');

$id = $_GET['id'];

$deletando = mysqli_query($conexao, "DELETE FROM usuario_por_setor WHERE id = '$id'");
if (isset($deletando)) {
	$_SESSION['msg_usuario_deletado'] = "<p class''> Usuário deletado com sucesso</p>"
	header('location:usuario_setor.php');
}else{
	$_SESSION['msg_usuario_nao_deletado'] = "<p class''> Usuário não deletado</p>"
	header('location:usuario_setor.php');
}
 ?>
