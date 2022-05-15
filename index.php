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
	<title></title>
</head>
<body>
	<center>
	<form method="POST" action="verificando_usuario.php">
		<label>Login</label><br>
		<input type="text" name="login" placeholder="Informe seu usuário"><br><br>
		<label>Senha</label><br>
		<input type="password" name="senha" placeholder="Informe sua senha"><br><br>
		<input type="submit" name="enviar">
	</form>
	</center>
</body>
</html>
