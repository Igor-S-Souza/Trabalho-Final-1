<?php 
//incluindo o banco de dados do site
include ('../BANCO/conexao.php');

//recebendo o id do usuário
$id = $_GET['id'];

//deletando o usuário selecionado
$deletando = mysqli_query($conexao, "DELETE FROM usuario_por_setor WHERE id = '$id'");
//caso o usuário tenha sido deletado com sucesso
if (isset($deletando)) {
	$_SESSION['msg_usuario_deletado'] = "<p class''> Usuário deletado com sucesso</p>"
	header('location:usuario_setor.php');
//caso o usuário não tenha sido deletado
}else{
	$_SESSION['msg_usuario_nao_deletado'] = "<p class''> Usuário não deletado</p>"
	header('location:usuario_setor.php');
}
 ?>
