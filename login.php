<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Loja 01</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="text-center">
  	    <form action="valida.php" method="post" id="form_login" class="form-horizontal">
		  <div class="control-group">
		    <label class="control-label" for="input_login">Login</label>
		    <div class="controls">
		      <input id="input_login" name="input_login" type="text" placeholder="Digite o seu login..." maxlength="32"/>
		    </div>
		  </div>
		  <div class="control-group">
		    <label class="control-label" for="input_senha">Senha</label>
		    <div class="controls">
		      <input id="input_senha" name="input_senha" type="password" placeholder="Digite a sua senha..." maxlength="32"/>
		    </div>
		  </div>
		  <div class="control-group">
		    <div class="controls">
		      <label class="checkbox"><input type="checkbox" />Lembrar senha</label>
		      <br />
		      <button class="btn" type="submit">Acessar</button>
		    </div>
		  </div>
		</form>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>