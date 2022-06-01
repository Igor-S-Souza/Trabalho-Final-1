<?php
include ("../DADOS_USUARIO/dados_de_usuario.php");
 ?>

<!DOCTYPE html>
<html>
  <head>
    <?php
    include('../BANCO/conexao.php');
    ?>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
    <title>chamado finalizado</title>
  </head>
  <body class="corpo">

    <center>
    <!-- <div class="div_nome_empresa">
      <br>
      <a href="menu.php"><img src="../IMAGENS/CallServer.svg"></a>
      <br>
    </div>
      <div id> -->
    <?php
        //Mensagem solicitação su
    if(isset($_SESSION['msg_chamado_sucesso'])){
        echo $_SESSION['msg_chamado_sucesso'];
        //Parando sessão
        unset($_SESSION['msg_chamado_sucesso']);
    }
    //Mensagem solicitação erro
    if(isset($_SESSION['msg_chamado_erro'])){
        echo $_SESSION['msg_chamado_erro'];
        //Parando sessão
        unset($_SESSION['msg_chamado_erro']);
    }
     ?>
  </div>

    </center>
    <div>
    <center>
    <br>
    <h2 id=h1> CHAMADOS FINALIZADOS </h2>
    <div class="div_tabela_andamento">
    <table class="tabela">

      <tr class="tr">
        <td class="td">PROTOCOLO</td>
        <td class="td">DATA</td>
        <td class="td">HORA</td>
        <td class="td">NOME</td>
        <td class="td">SETOR</td>
        <td class="td">PROBLEMA</td>
        <td class="td">RECEPÇÃO</td>
        <td class="td">SOLUÇÃO</td>
      </tr>

      <?php
      $select = mysqli_query ($conexao,
      "SELECT * FROM saida_solicitacao order by id_saida");
      while ($campo = mysqli_fetch_array($select)) {
      $id_saida =  $campo['id_saida'];
      $protocolo =  $campo['protocolo'];
      $data =  $campo['data'];
      $horario =  $campo['horario'];
      $nome =  $campo['nome'];
      $setor = $campo ['setor'];
      $problema =  $campo['problema'];
      $recepcao =  $campo['recepcao'];
      $solucao =  $campo['solucao'];

       ?>
      <tr class="tr2">
      <td class="td2"><?php echo $protocolo ?></td>
      <td class="td2"><?php echo $data ?></td>
      <td class="td2"><?php echo $horario ?></td>
      <td class="td2"><?php echo $nome ?></td>
      <td class="td2"><?php echo $setor ?></td>
      <td class="td2"><?php echo $problema ?></a></td>
      <td class="td2"><?php echo $recepcao ?></td>
      <td class="td2"><?php echo $solucao?></td>
      </tr>

    <?php } ?>

    </table>
  </div>
</center>
</div>

  </body>
</html>
