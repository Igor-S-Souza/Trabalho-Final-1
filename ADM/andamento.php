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
    <title>andamento</title>
  </head>
  <body class="corpo">

    <center>
<!--     <div class="div_nome_empresa">
      <br>  
      <a href="menu.php"><img src="../IMAGENS/CallServer.svg"></a>
      <br>
    </div> -->
      <div id>
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
    <center>
    <a href="menu.php"><img src="../IMAGENS/logo.svg" style="max-width : 100%; height :200px; margin-top:  -0.5% ; margin-bottom: -3%;"></a>
    </center>
    <center>
    <br>
    <h2 id=h1 style="margin-left: -65%; margin-bottom:-6%; margin-top: 3%;"> ANDAMENTO DAS SOLICITAÇÕES: </h2>
    <br>
    <br>
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
        <td class="td">STATUS</td>
      </tr>

      <?php
      $select = mysqli_query ($conexao,
      "SELECT * FROM status1 order by id");
      while ($campo = mysqli_fetch_array($select)) {
      $protocolo =  $campo['protocolo'];
      $data =  $campo['data4'];
      $horario =  $campo['horario4'];
      $nome =  $campo['nome4'];
      $setor = $campo ['setor'];
      $problema =  $campo['problema'];
      $recepcao =  $campo['recepcao'];
      $status =  $campo['status'];

       ?>
      <tr class="tr2">
      <td class="td2"><?php echo $protocolo ?></td>
      <td class="td2"><?php echo $data ?></td>
      <td class="td2"><?php echo $horario ?></td>
      <td class="td2"><?php echo $nome ?></td>
      <td class="td2"><?php echo $setor ?></td>
      <td class="td2"><?php echo $problema ?></td>
      <td class="td2"><?php echo $recepcao ?></td>
      <td class="td2"><?php echo $status?></td>
      </tr>

    <?php } ?>

    </table>
  </div>
</center> 
</div>

  </body>
</html>
