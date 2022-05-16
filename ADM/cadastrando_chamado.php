<?php 
include('../BANCO/conexao.php');

session_start(); 

date_default_timezone_set('America/Sao_Paulo');
$hora = date('H:i');
$data = date('d/m/Y');

$id = $_SESSION['id_do_usuario'];

$solicitacao = $_POST['solicitacao'];

$selecionando = mysqli_query($conexao, "SELECT * FROM usuario_por_setor WHERE id = '$id'");
while ($campo = mysqli_fetch_array($selecionando)) {
	$nome = $campo['nome'];
	$setor = $campo ['setor'];
	$contato = $campo ['contato'];

$inserindo = mysqli_query($conexao, "INSERT INTO solicitacao (nome, setor, recepcao, problema, horario, protocolo, contato, data1) VALUES ('$nome', '$setor', 'Aguardando técnico...', '$solicitacao', '$hora', '','$contato','$data')");

$inserindo2 = mysqli_query($conexao,"INSERT INTO status1 (protocolo,data4,horario4,nome4,contato4,setor,problema,recepcao,status) values ('', '$data', '$hora','$nome','$contato','$setor', '$solicitacao','Aguardando técnico...','Em andamento...')");
}
if (isset($inserindo)) {
$_SESSION['msg_chamado_sucesso'] = 'seu chamado foi aberto com sucesso!';
header("location:andamento.php");
}
 ?>