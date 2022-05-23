<!DOCTYPE html>
<html>
<head>
	<?php 
	//Iniciando uma sessão
	session_start();
    //Mensagem login em branco
    if(isset($_SESSION['msg_login_em_branco'])){
        echo $_SESSION['msg_login_em_branco'];
        //Parando sessão
        unset($_SESSION['msg_login_em_branco']);
    }

    //Mensagem senha em branco
    if(isset($_SESSION['msg_senha_em_branco'])){
        echo $_SESSION['msg_senha_em_branco'];
        //Parando sessão
        unset($_SESSION['msg_senha_em_branco']);
    }

    //Mensagem credenciais inválidas
    if(isset($_SESSION['msg_credenciais_invalidas'])){
        echo $_SESSION['msg_credenciais_invalidas'];
        //Parando sessão
        unset($_SESSION['msg_credenciais_invalidas']);
    }
	 ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
	<script src="https://kit.fontawesome.com/875bd3d356.js" crossorigin="anonymous"></script>
	<title></title>
</head>
<body class="corpo">
	<center>
<!-- 	<div class="div_nome_empresa">
		<br>
		<h1>Nome da empresa</h1>
		<br>
	</div> -->
	<br>
	<br>
	<br>
	</center>
	<center>
	<div class="div_login">
		<br>
		<br>
		<div>
		<h1 class="titulo_login">Login</h1>
		</div>
		<br>
		<br>
		<br>
		<form method="POST" action="verificando_usuario.php" class="form">
			<div class="div_login_esp">
			<div class="div_label"><img src="IMAGENS/user2.png" class="img_user"></div>
			<input type="text" name="login" placeholder="Informe seu usuário" class="input"><br><br><br>
			</div>
			<div class="div_login_esp">
			<div class="div_label"><img src="IMAGENS/cadeado2.png" class="img_cadeado"></div>
			<input type="password" name="senha" placeholder="Informe a sua senha" class="input"><br><br><br>
			</div>
			<div class="div_submit">
			<input type="submit" name="enviar" class="submit" value="LOGIN">
			</div>
		</form>
		<br>
		<br>
		<br>
		<br>
	</center>
	</div>
</body>
</html>
