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
  </  <div id>
    <?php
        //Mensagem solicitação erro
    if(isset($_SESSION['msg_chamado_erro'])){
        echo $_SESSION['msg_chamado_erro'];
        //Parando sessão
        unset($_SESSION['msg_chamado_erro']);
    }
    //Mensagem caso esteja vazio o campo
    if(isset($_SESSION['msg_sem_chamado_erro'])){
        echo $_SESSION['msg_sem_chamado_erro'];
        //Parando sessão
        unset($_SESSION['msg_sem_chamado_erro']);
    }
     ?> 
     msg_chamado_sucesso
  </div>
div> -->
  
</center>
  <center>
     <br>
     <br>
      <div class="div_solicitacao">
     <form method="POST" action="cadastrando_chamado.php">
     <br>
     <h1 class="titulo_solicitacao">solicitação</h1>
      <br><textarea class="area_solicitacao"  type="text"  name="solicitacao" placeholder="  informe o seu problema:"></textarea> <br>
      <br><input type="submit" class="submit_solicitacao"  value="SOLICITAR"/>
  </form>
</div>
</div>
</center>
</body>
</html>
