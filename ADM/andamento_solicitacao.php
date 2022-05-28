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

    <!--<center>
      <div class="div_nome_empresa">
      <br>
      <a href="menu.php"><img src="../IMAGENS/CallServer.svg"></a>
      <br>
    </div>
    </center>!-->
    <div>
    <center>
    <br>
    <h2 id=h1> ANDAMENTO DAS SOLICITAÇÕES </h2>
   
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
          <td class="td">FINALIZAR</td>
        </tr>

        <?php
        $select = mysqli_query ($conexao,"SELECT * FROM solicitacao ORDER BY id_solicitacao");
        while ($campo = mysqli_fetch_array($select)){
        $id = $campo['id_solicitacao'];
        $protocolo =  $campo['protocolo'];
        $data =  $campo['data1'];
        $horario =  $campo['horario'];
        $nome =  $campo['nome'];
        $setor = $campo ['setor'];
        $problema =  $campo['problema'];
        $recepcao =  $campo['recepcao'];

         ?>
        <tr class="tr2" onclick="document.location='solicitaçoes_status.php?id=<?php echo $id ?>'">
        <td class="td2"><?php echo $protocolo; ?></td>
        <td class="td2"><?php echo $data; ?></td>
        <td class="td2"><?php echo $horario; ?></td>
        <td class="td2"><?php echo $nome; ?></td>
        <td class="td2"><?php echo $setor; ?></td>
        <td class="td2"><?php echo $problema; ?></td>
        <td class="td2"><?php echo $recepcao; ?></td>
        <td class="td2"><a href="finalizar_chamado.php?id=<?php echo $id ?>"><img src="../IMAGENS/finalizar_chamado.svg" class="finalizar_img"></a></td>
        </tr>

        <?php } ?>

    </table>
  </div>
</center>
</div>

  </body>
</html>
