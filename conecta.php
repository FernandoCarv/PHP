<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
	$hostname = "localhost";
	$username = "root";
	$password = "root";
	$database = "loja01";

	// As próximas linhas são responsáveis pela conexão com o bando de dados.
	$conexao = mysql_connect($hostname,$username,$password) or die ("Sem conexão com o servidor");
	$selectdb = mysql_select_db($database,$conexao) or die("Banco de Dados inexistente, Entre em contato com o Administrador, fe.carvalho2010@gmail.com");

	//echo "Conectado com sucesso ao banco <strong>$database!</strong>";	
?>