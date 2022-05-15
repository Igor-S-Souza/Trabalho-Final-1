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
	<title></title>
</head>
<body class="corpo">
	<center>
	<div class="div_nome_empresa">
		<br>
		<h1>Nome da empresa</h1>
		<br>
	</div>
	<br>
	<br>
	<br>
	</center>
	<center>
	<div class="div_login">
		<br>
		<br>
		<h4>BEM-VINDO!</h4>
		<br>
		<form method="POST" action="verificando_usuario.php">
			<label class="label"><strong>Usuário:</strong></label><br>
			<input type="text" name="login" placeholder="Informe seu usuário" class="input"><br><br><br>
			<label class="label"><strong>Senha:</strong></label><br>
			<input type="password" name="senha" placeholder="Informe a sua senha" class="input"><br><br><br>
			<input type="submit" name="enviar" class="submit" value="LOGIN">
		</form>
		<br>
		<br>
		<br>
		<br>
	</center>
	</div>
</body>
</html>
