<?php 
include ("../DADOS_USUARIO/dados_de_usuario.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
    <script src="https://kit.fontawesome.com/875bd3d356.js" crossorigin="anonymous"></script>
    <?php include("../CSS/scripts.php"); ?>
    <title>Menu Inicial</title>
</head>
    <body class="corpo">
    <center>
<!--       <div class="div_nome_empresa"> -->
<!--         <br>  
        <a href="menu.php"><img src="../IMAGENS/CallServer.svg"></a>
        <br> -->
<!--       </div> -->
<!-- <hr class="linha"> -->
      <?php 
        //Mensagem login em branco
      if(isset($_SESSION['msg_de_bem_vindo'])){
          echo $_SESSION['msg_de_bem_vindo'];
          //Parando sessão
          unset($_SESSION['msg_de_bem_vindo']);
      }
       ?>
    </center>
    <center>
      <br> 
      <br>  
      <br>  
      <div class="div_menu_maior"> 
      <table>
      <tr>
          <td><div class="div_menu"><a href="solicitacao.php"><div class="div_icone"><img src="../IMAGENS/cronograma.svg"></div></a><div class="letra_div"><br>Abrir chamado</div></div></td>
          <td><div class="div_menu"><a href="andamento_solicitacao.php"><div class="div_icone"><img src="../IMAGENS/checklist.svg"></div></a><div class="letra_div"><br>Solicitações</div></div></td>
          <td><div class="div_menu"><a href="usuario_setor.php"><div class="div_icone"><img src="../IMAGENS/group.svg"></div></a><div class="letra_div"><br>Usuários</div></div></td>
          <td><div class="div_menu"><a href="andamento.php"><div class="div_icone"><img src="../IMAGENS/cronometro_lista.svg"></div></a><div class="letra_div"><br>Andamento</div></div></td>
          <td><div class="div_menu"><a href="contatos.php"><div class="div_icone"><img src="../IMAGENS/interno.svg"></i></div></a><div class="letra_div"><br>Contatos</div></div></td>
      </tr>
    </center>
    </table>
    </div>

</body>
</html>
