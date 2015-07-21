<?php
if(isset($_SESSION['logado'])){
	var_dump($_SESSION);
	unset($_SESSION['logado']);
	unset($_SESSION['login']);
	unset($_SESSION['dadoslogin']);
	// se você possui algum cookie relacionado com o login deve ser removido
	session_destroy();
	header("location: login.php");
	exit();
}
?>