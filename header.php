<?php include 'valida_sessao.php'; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
	<script src="js/jquery.maskedinput.js" type="text/javascript"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Loja 01</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      	<li><a href="clientes.php">Clientes</a></li>
      	<li><a href="categorias.php">Categorias</a></li>
      	<li><a href="produtos.php">Produtos</a></li>
        <?php if($_SESSION['dadoslogin']['usuario_tipo']=='G'){ ?>    
		    <li><a href="usuarios.php">Usuarios</a></li>
		    <li><a href="vendas.php">Vendas</a></li>
        <?php } ?> 
      </ul>
      <ul class="nav navbar-nav navbar-right"> 
		<li><a href="logout.php" type="button" class="btn btn-default"><span class="glyphicon glyphicon-off" aria-hidden=""></span> Sair</a></li>
      </ul>
      </div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
	    Usuário Logado:
	    <?php $usuário_logado = $_SESSION['dadoslogin']['usuario_nome'];
	    	echo $usuário_logado;
	    ?>
