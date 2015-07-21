<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
INDEX

<?php
require_once("valida_sessao.php");
if(isset($_SESSION['logado']) && $_SESSION['logado'] == 1){
	header("Location: dashboard.php");
}else{
	header("Location: login.php");
}
?>