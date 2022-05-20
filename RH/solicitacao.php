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
  <div class="div_nome_empresa">
      <br>
      <a href="menu.php"><img src="../IMAGENS/CallServer.svg"></a>
      <br>
  </div>
  </center>
  <center>
     <br>
     <br>
     <div class="teste">
     <form method="POST" action="cadastrando_chamado.php">
     <br>
     <h4>SOLICITAÇÃO</h4>
    	<br><label class="label"><strong>Motivo do Chamado:</strong></label>
      <br><textarea id="area"  type="text"  name="solicitacao" placeholder="  informe o que você deseja"></textarea> <br>
      <br><input type="submit" class="submit"  value="SOLICITAR"/>
  </form>
</div>
</center>
</body>
</html>
