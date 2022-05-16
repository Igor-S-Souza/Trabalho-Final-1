<?php 
//incluindo a conexão com o banco
include ('BANCO/conexao.php');
//iniciando a sessão
session_start();

//Verificando se o usuário preencheu o campo login
	if (isset($_POST['login'])) {
		//Verificando se o usuário preencheu o campo senha
		if (isset($_POST['senha'])) {
			//Recebendo as credenciais inseridas pelo usuário
			$login = addslashes($_POST['login']); //Escapando de caracteres especiais com addslashes e escapando de sql injection com mysqli_real_escape_string
			$senha = addslashes($_POST['senha']); //Escapando de caracteres especiais com addslashes, criptografando a senha com MD5 e escapando de sql injection com mysqli_real_escape_string

			$verificando = mysqli_query($conexao, "SELECT * FROM usuario_por_setor WHERE login = '$login' && senha = '$senha'");
			$resultado = mysqli_fetch_assoc($verificando);


				if (isset($resultado)) {
					//Selecionando o setor do usuário
					$selecionando=mysqli_query($conexao, "SELECT * FROM usuario_por_setor WHERE login = '$login' && senha = '$senha' ");
                        while($campo=mysqli_fetch_array($selecionando)){
                        	//Criando sessão para a identificação do usuário
                        	$_SESSION['id_do_usuario'] = $campo['id'];
                        	//Criando sessão para o nome do usuário
                        	$_SESSION['nome_do_usuario'] = $campo['nome'];
                        	//Armazenando o nome do usuário
                        	$nome = $campo['nome'];
                        	//Armazenando o setor do usuário
                        	$setor = $campo['setor'];
                        	//Criando sessão para o setor do usuário
                        	$_SESSION['setor_do_usuario'] = $campo['setor'];
                        	//Criando sessão para o login do usuário
                        	$_SESSION['login_do_usuario'] = $campo['login'];
                        	//Criando sessão para a senha do usuário
                        	$_SESSION['senha_do_usuario'] = $campo['senha']; 
                        	
							//Direcionando o usuário para a área de seu setor
                        	if ($setor == "ADM") {
                        		$_SESSION['msg_de_bem_vindo'] = "<p class=''>Olá, $nome</p>";
                        		header("Location: ADM/usuario_setor.php");
                        	}

                        	//Direcionando o usuário para a área de seu setor
                        	if ($setor == "RH") {
                        		$_SESSION['msg_de_bem_vindo'] = "<p class=''>Olá, $nome</p>";
                        		header("Location: RH/menu.php");
                        	}
						}

				}
				//Caso as credenciais sejam inválidas
				else {
					//Mensagem de login inválido
					$_SESSION['msg_credenciais_invalidas'] = "<p class=''>Login incorreto</p>";
					//Redirecionando o usuário para a página de login
					header("Location: index.php");
				}
			}
			//Caso o usuário não tenha inserido o campo senha
			else {
				//Indicando ao usuário que o campo senha deve ser inserido
				$_SESSION['msg_senha_em_branco'] = "<p class=''>Insira a senha de usuário</p>";
				//Redirecionando o usuário para a página de login
				header("Location: index.php");
			}
		}
		//Caso o usuário não tenha preenchido o campo login
		else {
			//Indicando ao usuário que o campo login deve ser inserido
			$_SESSION['msg_login_em_branco'] = "<p class=''>Insira o login de usuário</p>";
			//Redirecionando o usuário para a página de login
			header("Location: index.php");
		}
  ?>