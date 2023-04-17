<?php
	session_start();	
	//Incluindo a conexão com banco de dados
	include_once("conexao.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		//$senha = md5($senha);
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM `moreira.usuario` WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);

		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$ip = $_SERVER["REMOTE_ADDR"];
			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['nivel_de_acesso'];
			$_SESSION['usuarioEmail'] = $resultado['email'];
			
		//Registrando a seção
//			$sis_log_usuariosid = $resultado['id'];
//			$result_secao = "INSERT INTO sis_log(sis_log_usuariosid, sis_log_ip, sis_log_dataini) VALUES ($sis_log_usuariosid, $ip, now())";
//			$resultado_secao = mysqli_query($conn, $result_secao);
		//Consultando a ultima seção para exibição
			//$result_secao1 = "SELECT sis_log_secao FROM sis_log ORDER BY sis_log_secao DESC LIMIT 1";
			//$resultado_secao1 = mysqli_query($conn, $result_secao1);
			//$resultado_1 = mysqli_fetch_assoc($resultado_secao1);
			//$_SESSION['sis_log_secao'] = $resultado_1['sis_log_secao'];
		
			if($_SESSION['usuarioNiveisAcessoId'] == "1")
			{
				header("Location: menu.html");
			}
			elseif($_SESSION['usuarioNiveisAcessoId'] == "2")
			{
				header("Location: gerente.html");
			}
			else
			{
				header("Location: menu.html");
			}
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: index.php");
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: index.php");
	}
?>