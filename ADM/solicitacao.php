<!DOCTYPE html>
<html class="fonte">
<head>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <title> solicitacao </title>
  <meta charset="utf-8" />
</head>
<body class="corpo">

  <center>
  <div class="div_nome_empresa">
    <br><h1 id=h1> CallServer </h1> <br>
  </div>
  </center>

  <center>
     <br>
     <br>
     <div  class="div_login">
  <form  method="POST" action="andamento.php">
     <br>
     <h4> SOLICITAÇÃO</h4>

      <br><label class="label"><strong>  Nome do Solicitante:</strong></label>
      <br><input class="input" type="text" name="nome" placeholder=" seu nome"/><br><br>
    	<br><label class="label"><strong>   Motivo do Chamado:</strong></label>
      <br><textarea id="area"  type="text"  name="solicitacao" placeholder="  informe o que você deseja"></textarea> <br>
      <br><input type="submit" class="submit"  value="SOLICITAR"/>
  </form>
</div>
</div>
</center>
</body>
</html>
