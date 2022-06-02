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
    <title>chamado finalizado</title>

  </head>
  <body class="corpo">

    <center>
    <!-- <div class="div_nome_empresa">
      <br>
      <a href="menu.php"><img src="../IMAGENS/CallServer.svg"></a>
      <br>
    </div>
      <div id> -->
    <?php
        //Mensagem solicitação su
    if(isset($_SESSION['msg_chamado_sucesso'])){
        echo $_SESSION['msg_chamado_sucesso'];
        //Parando sessão
        unset($_SESSION['msg_chamado_sucesso']);
    }
    //Mensagem solicitação erro
    if(isset($_SESSION['msg_chamado_erro'])){
        echo $_SESSION['msg_chamado_erro'];
        //Parando sessão
        unset($_SESSION['msg_chamado_erro']);
    }
     ?>
  </div>

    </center>
    
    <center>
      <center> 
<a href="menu.php"><img src="../IMAGENS/logo.svg" style="max-width : 100%; height :200px; margin-top:  -1% ; margin-bottom: -6%;"></a>
</center>
    <h2 id=h1 style=" margin-left: -73%; margin-bottom:  -2%; margin-top:  4%;"> CHAMADOS FINALIZADOS: </h2>
    <div class="form-pesquisa">
      <div method="POST" id="form-pesquisa" class="barra_pesquisa" action="">
        <img src="../IMAGENS/lupa.svg" style="width:10%; cursor: pointer; height: 7vh; margin-top: -0.5%;">
        <input type="text" class="input-search" alt="tabela" placeholder="Buscar nesta lista" id="pesquisa"  />
      </div>
    </div>
    <div class="div_tabela_andamento">
    <table class="tabela" id=" tabela ">
      <thead>
      <tr class="tr">
        <td class="td">PROTOCOLO</td>
        <td class="td">DATA</td>
        <td class="td">HORA</td>
        <td class="td">NOME</td>
        <td class="td">SETOR</td>
        <td class="td">PROBLEMA</td>
        <td class="td">RECEPÇÃO</td>
        <td class="td">SOLUÇÃO</td>
      </tr>
      </thead>
      <tbody >
      <?php
      $select = mysqli_query ($conexao,
      "SELECT * FROM saida_solicitacao order by id_saida");
      while ($campo = mysqli_fetch_array($select)) {
      $id_saida =  $campo['id_saida'];
      $protocolo =  $campo['protocolo'];
      $data =  $campo['data'];
      $horario =  $campo['horario'];
      $nome =  $campo['nome'];
      $setor = $campo ['setor'];
      $problema =  $campo['problema'];
      $recepcao =  $campo['recepcao'];
      $solucao =  $campo['solucao'];

       ?>
      <tr class="tr2">
      <td class="td2"><?php echo $protocolo ?></td>
      <td class="td2"><?php echo $data ?></td>
      <td class="td2"><?php echo $horario ?></td>
      <td class="td2"><?php echo $nome ?></td>
      <td class="td2"><?php echo $setor ?></td>
      <td class="td2"><?php echo $problema ?></a></td>
      <td class="td2"><?php echo $recepcao ?></td>
      <td class="td2"><?php echo $solucao?></td>
      </tr>

    <?php } ?>
    </tbody>
    </table>
  </div>
</center>
</div>

  </body>
</html>
