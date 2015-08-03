<?php
	include_once 'header.php';
	require_once 'valida_sessao.php';
	//var_dump($_SESSION['dadoslogin']);
	//echo "TESTE";
?>
	<title>Cadastro Usuário</title>
		<form action="teste.php" method="post" class="form-horizontal">
			<h1>Cadastro de Usuário</h1>
				<div class="form-group">
				<label class="col-sm-2 control-label">Tipo de Usuário</label>
					<div class="col-sm-4 form-group text-left">
				<?php if (isset($tipousuario) && $tipousuario=="F") echo "checked";?>
					<label><input type="radio" id="radiotipousuario" name="radiotipousuario" value="F"/><span>Funcionário</span>
			    </label>
				&nbsp;&nbsp;&nbsp;
				<?php if (isset($tipousuario) && $tipousuario=="G") echo "checked";?>
					<label><input type="radio" id="radiotipousuario" name="radiotipousuario" value="G" checked/><span>Gerente</span>
					</label>
			        </div>
				</div>
			<div class="form-group">
			<label class="col-sm-2 control-label">Nome</label>
			    <div class="col-sm-6">
			    <input type="text" class="form-control" name="inputNome" id="inputNome" placeholder="Nome">
				</div>		
			</div>
			<div class="form-group">
			<label class="col-sm-2 control-label">Endereço</label>
			    <div class="col-sm-6">
			    <input type="text" class="form-control" name="inputEndereco" id="inputEndereco" placeholder="Endereço">
				</div>		
			</div>
		<div class="form-group">
		<label class="col-sm-2 control-label">CPF</label>
		    <div class="col-sm-2">
		    	<input type="text" class="form-control" name="inputCpf" id="inputCpf" placeholder="CPF">
		    	<script>
					jQuery(function($){
				    	$("#inputCpf").mask("999.999.999-99",{placeholder:"___.___.___-__"});
					});
				</script>
			</div>		
		</div>
		<div class="form-group">
		<label class="col-sm-2 control-label">CNPJ</label>
		    <div class="col-sm-2">
		    	<input type="text" class="form-control" name="inputCNPJ" id="inputCNPJ" placeholder="CNPJ">
		    	<script>
					jQuery(function($){
				    $("#inputCNPJ").mask("99.999.999/9999-99",{placeholder:"__.___.___/____-__"});
				    
					});
				</script>
			</div>		
		</div>		
		<div class="form-group">
		<label class="col-sm-2 control-label">Telefone Residencial</label>
		    <div class="col-sm-2">
		    <input type="text" class="form-control" name="inputTelRes" id="inputTelRes" placeholder="Telefone Residencial">
			<script>
				jQuery(function($){
			    $("#inputTelRes").mask("(99) 9999-9999",{placeholder:"(__) ____-____"});
				});
			</script>
			</div>		

		<label class="col-sm-2 control-label">Telefone Celular</label>
		<div class="col-sm-2">
			<input type="text" class="form-control" name="inputTelCel" id="inputTelCel" placeholder="Telefone Celular">
			<script>
				jQuery(function($){
			    $("#inputTelCel").mask("(99) 99999-9999",{placeholder:"(__) _____-____"});
				});
			</script>
		</div>		
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Data Nascimento</label>
		    <div class="col-sm-2">
		    	<input type="text" class="form-control" name="inputDtNasc" id="inputDtNasc" placeholder="Data de Nascimento">
				<script>
					jQuery(function($){
				    $("#inputDtNasc").mask("99/99/9999",{placeholder:"__/__/____"});
					});
					</script>
			</div>		
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Sexo</label>
			<div class="col-sm-8">
				<select id="selectSexoUsuario" name="selectSexoUsuario" class="col-sm-2 control-label">
				<option selected="selected" value="">Selecione</option>
				<option value="M">Masculino</option>
				<option value="F">Feminino</option>
				</select>
			</div>	
		</div>		
		<div class="form-group">
			<label class="col-sm-2 control-label">Email</label>
		    <div class="col-sm-2">
		    	<input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
			</div>		
		</div>	
		<div class="form-group">
			<label class="col-sm-2 control-label">Login</label>
		    <div class="col-sm-2">
		    	<input type="text" class="form-control" name="inputLogin" id="inputLogin" placeholder="Login">
			</div>			
			<label class="col-sm-2 control-label">Senha</label>
		    <div class="col-sm-2">
		    	<input type="password" class="form-control" name="inputSenha" id="inputSenha" placeholder="Senha">
			</div>
		</div>	
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
		    	<button type="submit" class="btn btn-default">Cadastrar</button>
			</div>
		</div>
	</form>
<?php include_once 'footer.php'; ?>'footer.php'; ?>