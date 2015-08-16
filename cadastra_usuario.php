<?php
	include_once 'header.php';
	require_once 'valida_sessao.php';
?>
		<script>
			jQuery(function($){
				$("#input_cpf_usuario").mask("999.999.999-99",{placeholder:" "});
				
	    		$("#input_dtnasc_usuario").mask("99/99/9999",{placeholder:" "});
	
				$("#inputinscricaoestadual").mask("999.999.999.999",{placeholder:" "}); 
	
				$("#input_tel_res_usuario").mask("(99) 9999-9999",{placeholder:" "});
	
		    	$("#input_tel_cel_usuario").mask("(99) 99999-9999",{placeholder:" "});

			});
		</script>
		<h1>Cadastro de Usuário</h1>

		<form action="insert_3.php" name="cadastra_usuario" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label">Tipo</label>
				<div class="col-sm-6" class="form-control">
					<label>	<input type="radio" name="radio_tipo_usuario" value="F" class="radio_tipo_usuario" /><span>Funcionário</span></label>
					&nbsp;&nbsp;&nbsp;
					<label><input type="radio" name="radio_tipo_usuario" value="G" class="radio_tipo_usuario" /><span>Gerente</span></label>
		        </div>
			</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">Nome Completo</label>
				    <div class="col-sm-6">
				    <input type="text" class="form-control" maxlength="250" name="input_nome_usuario" id="input_nome_usuario" placeholder="">
					</div>		
				</div>		
				<div class="form-group" id="div_cpf">
				<label class="col-sm-2 control-label">CPF</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" maxlength="14" name="input_cpf_usuario" id="input_cpf_usuario" placeholder="">
					</div>
				</div>
				<div class="form-group" id="div_sexo">
					<label class="col-sm-2 control-label">Sexo</label>
					<div class="col-sm-10">
						<select id="select_sexo_usuario" name="select_sexo_usuario" class="col-sm-2 control-label">
						<option>Selecione</option>
						<option value="M">Masculino</option>
						<option value="F">Feminino</option>
						</select>
					</div>	
				</div>				
				<div class="form-group" id="div_dt_nasc">
					<label class="col-sm-2 control-label">Data Nascimento</label>
				    <div class="col-sm-2">
				    	<input type="text" class="form-control" name="input_dtnasc_usuario" id="input_dtnasc_usuario" placeholder="">
					</div>		
				</div>
			<div class="form-group">
			<label class="col-sm-2 control-label">Endereço</label>
			    <div class="col-sm-6">
			    <input type="text" class="form-control" maxlength="200" name="input_endereco_usuario" id="input_endereco_usuario" placeholder="">
				</div>		
			</div>			
			<div class="form-group">
				<label class="col-sm-2 control-label">Telefone Residencial</label>
				    <div class="col-sm-2">
				    <input type="text" class="form-control" maxlength="15" name="input_tel_res_usuario" id="input_tel_res_usuario" placeholder="">
					</div>		
				<label class="col-sm-2 control-label">Telefone Celular</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" maxlength="15" name="input_tel_cel_usuario" id="input_tel_cel_usuario" placeholder="">
				</div>		
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Login</label>
			    <div class="col-sm-2">
			    	<input type="text" class="form-control" maxlength="12" name="input_login_usuario" id="input_login_usuario" placeholder="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-2">
			    	<input type="email" class="form-control" maxlength="45" name="input_email_usuario" id="input_email_usuario" placeholder="">
				</div>
				<label class="col-sm-2 control-label">Senha</label>
			    <div class="col-sm-2">
			    	<input type="password" class="form-control" maxlength="32" name="input_senha_usuario" id="input_senha_usuario" placeholder="">
				</div>
			</div>	
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
			    	<button type="submit" class="btn btn-default">Cadastrar</button>
				</div>
			</div>
		</form>
<?php include_once 'footer.php'; ?>