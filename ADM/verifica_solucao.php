<?php
include("../BANCO/conexao.php");
  $id = $_GET['id'];
  if (isset($_POST['solucao'])) {
  	$solucao = $_POST['solucao'];

  	$selecionando = mysqli_query($conexao,"SELECT * FROM solicitacao WHERE id_solicitacao = '$id'");
  	while ($campo = mysqli_fetch_array($selecionando)) {
  	  $id = $campo['id_solicitacao'];
      $protocolo =  $campo['protocolo'];
      $data =  $campo['data1'];
      $horario =  $campo['horario'];
      $nome =  $campo['nome'];
      $setor = $campo ['setor'];
      $problema =  $campo['problema'];
      $recepcao =  $campo['recepcao'];

  	$inserindo = mysqli_query($conexao,"INSERT INTO saida_solicitacao(protocolo,nome,setor,recepcao,problema,horario,data,solucao) VALUES ('$protocolo','$nome','$setor','$recepcao','$problema','$horario','$data','$solucao') ");
    if (isset($inserindo)) {
  	$deletando = mysqli_query($conexao, "DELETE FROM solicitacao WHERE protocolo = '$protocolo'");
		if (isset($deletando)) {
		    $deletando2 = mysqli_query($conexao, "DELETE FROM status1 WHERE protocolo = '$protocolo'");
		    if (isset($deletando2)) {
		    	header("location:andamento_solicitacao.php");
		    }else{
		    	header("location:andamento_solicitacao.php");
		        }
		}else{
		    header("location:andamento_solicitacao.php");
		    }
	   }else{
	   	header("location:andamento_solicitacao.php");
	   }
	  }
	 }else{
	 header("location:andamento_solicitacao.php");
	 }
 ?>
