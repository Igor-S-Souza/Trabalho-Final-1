<?php

include ("../DADOS_USUARIO/dados_de_usuario.php");

//incluindo o banco de dados do site
include("../BANCO/conexao.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
    <title>Contatos</title>
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

    <h2> Contatos </h2>
    <br>

<table class="tabela">

      <tr class="tr">
          <td class="td">NOME</td>
          <td class="td">SETOR</td>
          <td class="td">CONTATO</td>
      </tr>

      <?php
        $selecionando = mysqli_query($conexao, "SELECT * FROM usuario_por_setor where setor='RH' ");
        WHILE($campo = mysqli_fetch_array($selecionando)){
              $nome = $campo['nome'];
              $setor = $campo['setor'];
              $contato = $campo['contato'];

       ?>
      <tr class="tr2">
          <td class="td2"><?php  echo $nome; ?> </td>
          <td class="td2"><?php  echo $setor; ?> </td>
          <td class="td2"><?php  echo $contato; ?> </td>
      </tr>
     <?php   } ?>
</table>
</center>
</div>
</body>
</html>
