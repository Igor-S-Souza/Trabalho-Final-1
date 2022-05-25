<?php
include ("../DADOS_USUARIO/dados_de_usuario.php");

$id = $_GET['id'];
 ?>
<!DOCTYPE html>
<html class="fonte">
<head>
  <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
  <title> solicitacao </title>
  <meta charset="utf-8" />
</head>
<body class="corpo">

  <!-- <center>
  <div class="div_nome_empresa">
    <br>
    <a href="menu.php"><img src="../IMAGENS/CallServer.svg"></a>
    <br>
  </div>
  </center> -->

  <center>
     <br>
     <br>
     <div  class="div_solicitacao">
  <form  method="POST" action="verifica_solucao.php?id=<?php echo $id ?>">
     <br>
     <h1 class="titulo_solução">Solução</h1>
      <br><textarea class="area_solicitacao"  type="text"  name="solucao" placeholder="  informe a solução"></textarea> <br>
      <br><input type="submit" class="submit_solicitacao"  value="FINALIZAR"/>
  </form>
</div>
</center>
</body>
</html>
