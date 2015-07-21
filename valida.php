<?php
require_once("conecta.php");
require_once("valida_sessao.php");

// As variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['input_login'];
$senha = md5($_POST['input_senha']);

// Comando SQL de verificação de autenticação
$sql = "SELECT usuario_id
		usuario_login,
		usuario_tipo,
		usuario_nome,
		usuario_cpf,
		usuario_telefone_res,
		usuario_telefone_cel,
		usuario_endereco,
		usuario_data_nasc,
		usuario_email
			FROM usuario
			WHERE usuario_login = '$login'
				AND usuario_senha = '$senha'";

$resultado = mysql_query($sql,$conexao) or die ("Erro na seleção da tabela.");

// Caso consiga logar cria a sessão
if(mysql_num_rows ($resultado) > 0){
	session_start();
	
	$_SESSION['logado'] = 1;
	$_SESSION['login'] = $login;
	
	$dadosLogin = mysql_fetch_assoc($resultado);
	
	$_SESSION['dadoslogin'] = $dadosLogin;
	
	header('Location: dashboard.php');
}else{
	// Caso contrário redireciona para a página de login
	
	// Limpa a variáveis armazenadas na sessao
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	// Redireciona para a página de autenticação
	header('Location: login.php');
	exit();
}
?>