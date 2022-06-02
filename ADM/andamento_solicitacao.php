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

    <script type="text/javascript" src="../biblioteca/jquery-2.2.3;min.js"></script>
    <script type="text/javascript" src="../biblioteca/jquery-1.9.1.min.js"></script>
    <?php include('../CSS/scripts.php'); ?>
    <title>andamento</title>
  </head>
  <body class="corpo">
  <a href="chamados_finalizados.php">finalizados</a>
<center>
<a href="menu.php"><img src="../IMAGENS/logo.svg" style="max-width : 100%; height :150px; margin-top:  -1% ; margin-bottom: -6%;"></a>
</center>
    <div>
    <center>
    <br>
    <h2 id=h1 style=" margin-left: -80%; margin-bottom:  -2%; margin-top:  4%;">SOLICITAÇÕES: </h2>
   <center>
    <div class="form-pesquisa">
      <div method="POST" id="form-pesquisa" class="barra_pesquisa" action="">
        <img src="../IMAGENS/lupa.svg" style="width:10%; cursor: pointer; height: 7vh; margin-top: -0.5%;">
        <input type="text" class="input-search" alt="tabela" placeholder="Buscar nesta lista" id="pesquisa"  />
      </div>
    </div>
    <div class="div_tabela_andamento">
      <table class="tabela" id="tabela">
        <thead>
        <tr class="tr">
          <td class="td">PROTOCOLO</td>
          <td class="td">DATA</td>
          <td class="td">HORA</td>
          <td class="td">NOME</td>
          <td class="td">SETOR</td>
          <td class="td">PROBLEMA</td>
          <td class="td">RECEPÇÃO</td>
        </tr>
        </thead>
        <tbody>
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
        </tr>

        <?php } ?>
        </tbody>
    </table>
  </div>
</center>
</div>

  </body>
</html>
