<!DOCTYPE html>
<html>
<?php 
      //Conexão com o banco de dados 
      include('../BANCO/conexao.php');
      //Verificando usuário
      include('../DADOS_USUARIO/dados_de_usuario.php');
      
      //Recebendo e armazenando a identificação da solicitação 
      $id = $_GET['id'];
      
      //Selecionando a solicitaçao na tabela de solicitaçao
      $seleciona=mysqli_query($conexao, "SELECT * FROM solicitacao WHERE  id_solicitacao = '$id' "); 
         while($campo=mysqli_fetch_array($seleciona)){ 
            //Armazenando os dados vindos no banco de dados da solicitação
            $protocolo = $campo['protocolo'];
            $data = date('d/m/Y', strtotime($campo['data1']));
            $horario = $campo['horario'];
            $solicitante = $campo['nome'];
            $contato = $campo['contato'];
            $setor = $campo['setor'];
            $problema = $campo['problema'];
            $recepçao = $campo['recepcao'];
         }

        //Atualizando status da solicitação no banco de dados
        mysqli_query($conexao, "UPDATE status1 SET status='Em andamento' WHERE  id='$id' ")
      ?>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
</head>
<body class="corpo">
    <br>
    <div class="recibo5">
        <br>
        <br>
        <center>
            <h1 class='font1'>Solicitação
                <?php echo $protocolo; //Apresentando o protoclo da solicitação ?>
            </h1>
        </center>
        <p class='font_subilhado'><b>Data: </b>
            <?php echo $data; //Apresentando a data da solicitação  ?>
        </p>
        <p class='font_subilhado'><b>Horário: </b>
            <?php echo $horario; //Apresentando o horário da solicitação ?>
        </p>
        <p class='font_subilhado'><b>Solicitante: </b>
            <?php echo $solicitante; //Apresentando o nome do solicitante ?>
        </p>
        <p class='font_subilhado'><b>Contato: </b>
            <?php echo $contato; //Apresentando o contato do solicitante  ?>
        </p>
        <p class='font_subilhado'><b>Setor do solicitante: </b>
            <?php echo $setor; //Apresentando o setor do solicitante  ?>
        </p>
        <p class='font_subilhado'><b>Problema: </b>
            <?php echo $problema; //Apresentando o problema do solicitante ?>
        </p>
        <p class='font_subilhado'><b>Recepção </b>
            <?php echo $recepçao; //Apresentando o nome do Técnico que fez a recepção da solicitação ?>
        </p>
        <br>
        <div style=" display:flex; justify-content: center; flex-wrap: wrap;">

            <!-- Link para a página de andamento de solicitações -->
            <a href='andamento_solicitacao.php' class="a3" style="padding-right: 6%; padding-left: 6%;">
            Ok
            </a>
            <!-- Link para a página de edição de solicitações -->
            <a style="padding-right: 5%; padding-left: 5%;" href="editar_solicitaçao?id=<?php echo $id; //Enviando a identificação da solicitação para a página de edição de solicitação (editar_solicitaçao.php) ?>" class="a3 b">
            Editar
            </a>
            <!-- Link para a página de confirmação de exclusão de solicitação -->
            <a style="padding-right: 5%; padding-left: 5%;" href="conf_excluir_solicitaçao?id=<?php echo $id; //Enviando a identificação da solicitação para a página de confirmação de exclusão (conf_excluir_solicitaçao.php) ?>" class="a3 b">
            Excluir
            </a>
            <!-- Link para a página de andamento de solicitações -->
            <a href="finalizar_chamado.php?id=<?php echo $id; //Enviando a identificação da solicitação para a página de status (status_solicitaçao.php) ?>" class="a3" style="padding-right: 6%; padding-left: 6%;">
            Atender
            </a>
        </div>
        <br>
        <br>
        <br>
    </div>
</body>

</html>