<?php
//incluindo o banco de dados do site
include('../BANCO/conexao.php');

//iniciando uma sessão
session_start();

//definindo a data e hora local
date_default_timezone_set('America/Sao_Paulo');
$hora = date('H:i');
$data = date('d/m/Y');

//pegando o id do usuário
$id = $_SESSION['id_do_usuario'];
//recebendo o chamado do usuário
$solicitacao = $_POST['solicitacao'];

//Gerando um número de protocolo aleatório
$protocolo = substr(md5(time()), 0, 6);

//selecionando e armazenando as informações do usuário correspondende ao id
$selecionando = mysqli_query($conexao, "SELECT * FROM usuario_por_setor WHERE id = '$id'");
while ($campo = mysqli_fetch_array($selecionando)) {
	$nome = $campo['nome'];
	$setor = $campo ['setor'];
	$contato = $campo ['contato'];

//inserindo o chamado e as informações do usuário na tabela de solicitação
$inserindo = mysqli_query($conexao, "INSERT INTO solicitacao (nome, setor, recepcao, problema, horario, protocolo, contato, data1) VALUES ('$nome', '$setor', 'Aguardando técnico...', '$solicitacao', '$hora', '$protocolo','$contato','$data')");

////inserindo o chamado e as informações do usuário na tabela de status1
$inserindo2 = mysqli_query($conexao,"INSERT INTO status1 (protocolo,data4,horario4,nome4,contato4,setor,problema,recepcao,status) values ('$protocolo', '$data', '$hora','$nome','$contato','$setor', '$solicitacao','Aguardando técnico...','Em espera...')");
}
//Caso não receba o chamado
//caso tenha inserido os dados na tabela de solicitação
if (isset($inserindo)) {
  //caso tenha inserido os dados na tabela de status1
  if (isset($inserindo2)) {
  	$_SESSION['msg_chamado_sucesso'] = '<p class="magica">seu chamado foi aberto com sucesso!';
    header("location:andamento.php");
  //caso não tenha inserido os dados na tabela de solicitação
  }else{
  	$_SESSION['msg_chamado_erro'] = '<p class="magica_erro">Algo deu errado!';
  	header("location:solicitacao.php");
  }
//caso não tenha inserido os dados na tabela de status1
}else{
  	$_SESSION['msg_chamado_erro'] = '<p class="magica_erro">Algo deu errado!';
  	header("location:solicitacao.php");
  }
 ?>
