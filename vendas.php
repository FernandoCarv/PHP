<?php

	include_once 'header.php';
	include_once 'valida_sessao.php';
	include_once 'conecta.php';
	
	if($_SESSION['dadoslogin']['usuario_tipo']=='F'){
		header('Location: dashboard.php');
	}
	
	include_once "filtro_vendas.php";
	
	$sql_categoria = "SELECT categoria_id,
				categoria_descricao
				FROM categoria";
	
	$sql_categoria = mysql_query($sql_categoria, $conexao);
?>
	<h1><center>Relatório de Vendas</center></h1>
	
	<form action=" " name="pesquisa_venda" method="post" class="form-horizontal">
	<label>Pesquisa de  Vendas</label>
		<div class="form-group">
		<label class="col-sm-2 control-label">Id da venda</label>
		    <div class="col-sm-1">
		    <input type="text" class="form-control" maxlength="200" name="input_id_venda" id="input_id_venda" placeholder="">
			</div>		

		<label class="col-sm-2 control-label">Id do Cliente</label>
		    <div class="col-sm-1">
		    <input type="text" class="form-control" maxlength="200" name="input_id_cliente_venda" id="input_id_cliente_venda" placeholder="">
			</div>		
		<label class="col-sm-1 control-label">Nome do cliente</label>
		    <div class="col-sm-4">
		    <input type="text" class="form-control" maxlength="200" name="input_nome_cliente_venda" id="input_nome_cliente_venda" placeholder="">
			</div>		
		</div>
		
		<div class="form-group">
		
			<label class="col-sm-2 control-label">Categoria</label>
	
			<div class="col-sm-10">
				<select id="select_produto_categoria" name="select_produto_categoria" class="col-sm-2 control-label">
					<option value="">Selecione</option>
					<?php while ($row_categoria = mysql_fetch_assoc($sql_categoria)){ ?>
					<option value="<?php echo $row_categoria['categoria_id']?>"><?php echo $row_categoria['categoria_descricao']?></option>
					<?php } ?>
				</select>
				<label class="col-sm-2 control-label">Id do Produto</label>
			    <div class="col-sm-1">
			    	<input type="text" class="form-control" maxlength="200" name="input_id_produto_venda" id="input_id_produto_venda" placeholder="">
				</div>							
			</div>	
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
		    	<button type="submit" class="btn btn-default">Pesquisar</button>
			</div>
		</div>
	</form>	
	<hr>	
	<?php	echo '<table class="table table-hover">';
				echo '<thead>';
					echo '<tr>';
						echo '<th>ID Venda</th>';
						echo '<th>ID Cli</th>';
						echo '<th>Nome do Cliente</th>';							
						echo '<th>Razão Social</th>';
						echo '<th>ID Cat</th>';
						echo '<th>Categoria</th>';
						echo '<th>ID Prod</th>';
						echo '<th>Nm Prod</th>';
						echo '<th>QTD prod</th>';
						echo '<th>Vl Total</th>';						
					echo '</tr>';
				echo '</thead>';
			echo '<tbody>';
					
			while ($row = mysql_fetch_assoc($sql_id_venda)) {
				
				echo '<tr>';
				echo '<td>' . $row['venda_id'] . '</td>';
				echo '<td>' . $row['venda_cliente_id'] . '</td>';
				echo '<td>' . $row['cliente_nome'] . '</td>';
				echo '<td>' . $row['cliente_razao_social'] . '</td>';
				echo '<td>' . $row['venda_categoria_id'] . '</td>';
				echo '<td>' . $row['categoria_descricao'] . '</td>';
				echo '<td>' . $row['venda_produto_id'] . '</td>';
				echo '<td>' . $row['produto_nome'] . '</td>';
				echo '<td>' . $row['venda_quantidade_produto'] . '</td>';
				echo '<td>' . $row['venda_valor_total'] . '</td>';
				echo '</tr>';
			}
			echo '</tbody>';
		echo '</table>';
	?>
	
	<?php include_once 'footer.php';?>