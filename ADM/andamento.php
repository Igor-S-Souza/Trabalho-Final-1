<!DOCTYPE html>
<html>
  <head>
    <?php
    include('../BANCO/conexao.php');
    ?>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <title>andamento</title>
  </head>
  <body class="corpo">

    <center>
    <div class="div_nome_empresa">
      <br><h1 id="h1"> CallServer </h1><br>
    </div>
    </center>

    <CENTER> <div>
    <br>
    <h2 id=h1> ANDAMENTO DAS SOLICITAÇÕES </h2>
    <br>
    <br>

    <TABLE>

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

    </TABLE>
</center> </DIV>

  </body>
</html>
