<?php
include ("../DADOS_USUARIO/dados_de_usuario.php");
?>
<!DOCTYPE html>
<html class="fonte">
<head>
  <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
  <title> solicitacao </title>
  <meta charset="utf-8" />
</head>
<body class="corpo">

  <center>
<!--   <div class="div_nome_empresa">
      <br>
      <a href="menu.php"><img src="../IMAGENS/CallServer.svg"></a>
      <br>
  </div> -->
  </center>
  <center>
     <br>
     <br>
     <div class="div_solicitacao">
     <form method="POST" action="cadastrando_chamado.php">
     <br>
     <h1 class="titulo_solicitacao">Solicitação</h1>
      <textarea class="area_solicitacao"  type="text"  name="solicitacao" placeholder="  informe o seu problema:"></textarea> <br>
      <br><input type="submit" class="submit_solicitacao"  value="SOLICITAR"/>
  </form>
</div>
</div>
</center>
</body>
</html>
