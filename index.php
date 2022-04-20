<?php
	//inicializador de sessão;
	session_start();	
	// Comando utilizado para não exibir notificação e alertas;
	error_reporting(1);
		//verificar se clicou em entrar para autenticar;
		if ($_POST != NULL) {
			// Conecta ao BD
			$conexao = new mysqli( "localhost", "id2569928_admin", "admin", "id2569928_gest2017" );

			//$conexao = new mysqli( "localhost", "root", "", "gest2017" );
			// Erro na conexão?
				if ( $conexao->connect_error == true ) {
					echo "Erro ao Conectar! Erro: ";
			}
			//pega as informações submetidas no formulário;
			$login = $_POST["login"];
			$senha = $_POST["senha"];
			//comando para criptografar a senha;
			$senha = md5($senha);
			// Cria comando SQL sem executa-lo
			$sql = "SELECT * 
					FROM usuario
					WHERE login = '$login'
					and senha = '$senha' ";
			//echo $sql; //opção para identificar erros (se acrescentar o exit; interrompe o código php );
			// agora executa o comando do banco e apos ele retorna um vetor(conjunto de dados em caso de uso de um select);
			$retorno = $conexao->query( $sql );
			
			//testar se não teve erro de retorno
			if ( $retorno == false ) {
				echo $conexao->error; exit;
			} 
			//verificando se encontrou algum registro no banco de dados;
			if ( $registro = $retorno->fetch_array() ){
				//cria variáveis 
				$_SESSION["logado"] = "ok";
				$_SESSION["id_usuario"] = $registro["id"];				
				//redirecionamento 
				header("location: main.php");
			} else { 
				//não conseguiu encontrar informações 
					echo "<script> 
						alert('Usuário e/ou senha Invalidos');
						location.href='index.php';
						</script>";
			}
		}
?>

<html>
	<head>
		<title>AEGS - Acompanhamento de Enfermagem à Gestante com Sífilis</title>
		<meta charset="UTF-8">
	</head>
	
	<body>
<style type="text/css">
	body{ 	
		background: url(img/wall8.jpg) no-repeat center center fixed;
 		background-size: cover; /*Css padrão*/
        -webkit-background-size: cover; /*Css safari e chrome*/
        -moz-background-size: cover; /*Css firefox*/
        -ms-background-size: cover; /*Css IE não use mer#^@%#*/
        -o-background-size: cover; /*Css Opera*/

		/*
		background-image: url(img/wall8.jpg); /*(img/69129020-pregnancy-wallpapers.jpg);
		background-position: center;
		background-attachment: fixed; 
		background-repeat: no-repeat;
		width: 80%; 
		height: 80%; 
		position: absolute;
		top: 0;
		left: 0;
		
		/*background-size: cover; */ 
	}
</style>

<div class="telalogin">
		<fieldset style="position: fixed; 
						margin-left: 36%;
						margin-top:20%;
						font-family:'Verdana';
        				font-size:10px;" >

				<h2> AEGS - Acompanhamento de Enfermagem à Gestante com Sífilis</h2>

		<form method="POST">
		
			<table align="center">

				<tr>
					<td>Login</td>
					<td><input type="text" name="login" required></td>
				</tr>
				<tr>
					<td>Senha</td>
					<td><input type="password" name="senha" required></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Entrar" ></td>
				</tr>
			</table>
		
		</form>
		</fieldset>
	</body>
</html>
