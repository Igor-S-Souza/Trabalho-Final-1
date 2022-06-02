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
    <title>andamento</title>
  </head>
  <body class="corpo">
    <center>
      <div id>
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
<br>
<h1 class="font_titulos2">Meus chamados</h1>
<br>
<div class="grid" style="width: 100%;">
    <div class="desktop">
      <div class="grid_meus_chamados">
        <div class="lista_meus_chamados">
          <table class="tabela_andamento">
            <div class="solicitaçoes_espera_aba">
              Chamados em andamento
            </div>
                <?php 
                    //armazenando o nome do usuário 
                     $nome = $_SESSION['nome_do_usuario'];
                    //Buscando chamados em andamento do usuário
                    $buscando=mysqli_query($conexao, "SELECT * FROM status1 WHERE nome4 = '$nome' ORDER BY id DESC");
                    //Verificando se há solicitações
                    $cont_solicitacoes = mysqli_num_rows($buscando);
                    if ($cont_solicitacoes == "0") { 
                       echo "<center>";
                          echo "<div class='nao_a_chamados'>";
                             echo "Não há chamados em aberto";
                          echo "</div>";
                       echo "</center>";
                    }
                    else {

                    }
                    while($campo=mysqli_fetch_array($buscando)){?>
                <tr class="linha2">
                     <td class="gridaa" id="">
                           <strong style="font-size: 1.3em;"><?php echo $campo['protocolo']; ?></strong>
                        <br>
                   <?php echo $campo['problema']; ?>
                    
                  </td>
                  <?php 
                     if ($campo['status'] == "Em espera..." && $campo['recepcao'] == "Aguardando técnico...") { ?>
                        <td class="corpotabela" id="t3">
                           <center>
                           <?php echo "Aguardando técnico" ?> 
                           </center>
                        </td>
                  <?php 
                     }
                     else {
                  ?>
                     <td class="corpotabela" id="t3">
                        <center>
                           <?php echo $campo['status']; ?>
                           <br>
                           <strong>Por:</strong> <?php echo $campo['recepcao']; ?> 
                        </center>
                     </td>
                  <?php
                     }
                  ?>
                     <td class="corpotabela" id="t5">
                        <center><strong></strong> <?php echo $campo['data4']; ?></center>
                     </td>
                     <td class="corpotabela" id="t7">
                        <center>

                           <a style="text-decoration: none;" href="verificaçao_cancelar_chamado.php?id_chamado=<?php echo $campo['protocolo']; ?>">
                        <div class="botao_cancelar_meus_chamado">
                           cancelar
                        </div>
                     </a>
                        </center>
                     </td>
                  </tr>
                  <?php  } //Finalizando o laço de repetição ?>
                  </div>
                  </table>

               <div class="solicitaçoes_feitas_aba">
                  Chamados finalizados
               </div>

               <table border="1" class="tabela">
<!--                   <tr class="linha3">

                     <th class="headertabela_chamados">Protocolo</th>
                     <th class="headertabela_chamados">Técnico</th>
                     <th class="headertabela_chamados">Chamado</th>
                     <th class="headertabela_chamados">Descrição</th>

                  </tr> -->
                  <?php
                  //Buscando chamados finalizados do usuário
                  $buscando_2 = mysqli_query($conexao, "SELECT * FROM saida_solicitacao WHERE nome = '$nome' ORDER BY protocolo DESC LIMIT 5");
                  while ($campo_2 = mysqli_fetch_array($buscando_2)) {
                  ?>

                     <tr class="linha3">

                        <td class="corpotabela" id="t1">
                           <center>
                              <strong><?php echo $campo_2['protocolo']; ?></strong>
                              <br>
                              <?php echo $campo_2['data']; ?>
                           </center>
                        </td>
                        <td class="corpotabela" id="t1">
                           <center>
                              <?php echo "Finalizado" ?>
                              <br>
                              <strong>Por:</strong>
                              <?php echo $campo_2['recepcao']; ?>
                           </center>
                        </td>
                        <td class="corpotabela" id="t1">
                           <center><strong>Chamado:</strong>
                              <?php echo $campo_2['problema']; ?>
                           </center>
                        </td>
                        <td class="corpotabela" id="t1">
                           <center><strong>Solução:</strong>
                              <?php echo $campo_2['solucao']; ?>
                           </center>
                        </td>
                     </tr>
                  <?php  } //Finalizando o laço de repetição 
                  ?>
               </table>
   </center>
   </div>
   </div>
</center> 
</body>
</html>
