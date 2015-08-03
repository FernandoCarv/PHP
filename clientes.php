<?php
	include_once 'conecta.php';
	include_once 'header.php';
?>
		<h2>Clientes</h2>
		<form class="navbar-form navbar-left" role="search">
        <div class="form-group">
	    	<input type="text" class="form-control" placeholder="Pesquisar">
	        </div>
	        <button type="submit" class="btn btn-default">Pesquisar</button>
		</form>
		<?php	echo '<table class="table table-hover">';
					echo '<thead>';
						echo '<tr>';
							echo '<th>ID</th>';
							echo '<th>Tipo</th>';
							echo '<th>Nome</th>';
							echo '<th>CPF</th>';
							echo '<th>CNPJ</th>';
							echo '<th>Dt Nasc</th>';
							echo '<th>Sexo</th>';
							echo '<th>Endereço</th>';
							echo '<th>Tel Res</th>';
							echo '<th>Tel Cel</th>';
							echo '<th>Email</th>';
							echo '<th>Senha</th>';
							echo '<th></th>';
						echo '</tr>';
					echo '</thead>';
					echo '<tbody>';
					// query que busca todos os dados da tabela CLIENTE
					$sql = mysql_query("SELECT
							cliente_id,
							cliente_tipo,
							cliente_nome,
							cliente_cpf,
							cliente_cnpj,
							DATE_FORMAT(cliente_dt_nasc , '%d/%m/%Y') as cliente_dt_nasc,
							cliente_sexo,
							cliente_endereco,
							cliente_telefone_res,
							cliente_telefone_celular,
							cliente_email,
							cliente_senha
							FROM cliente");
					while ($row = mysql_fetch_assoc($sql)) {
						echo '<tr>';
							echo '<td>' . $row['cliente_id'] . '</td>';
							echo '<td>' . $row['cliente_tipo'] . '</td>';
							echo '<td>' . $row['cliente_nome'] . '</td>';
							echo '<td>' . $row['cliente_cnpj'] . '</td>';
							echo '<td>' . $row['cliente_cpf'] . '</td>';
							echo '<td>' . $row['cliente_dt_nasc'] . '</td>';
							echo '<td>' . $row['cliente_sexo'] . '</td>';
							echo '<td>' . $row['cliente_endereco'] . '</td>';
							echo '<td>' . $row['cliente_telefone_res'] . '</td>';
							echo '<td>' . $row['cliente_telefone_celular'] . '</td>';
							echo '<td>' . $row['cliente_email'] . '</td>';
							echo '<td>' . $row['cliente_senha'] . '</td>';
							echo '<td><span class="glyphicon glyphicon-search" ></span>';
							echo '<td><span class="glyphicon glyphicon-pencil" ></span>';
							echo '<td><span class="del glyphicon glyphicon-trash" clid="'.$row['cliente_id'].'"></span></td>';							
						echo '</tr>';
					}
					echo '</tbody>';
			echo '</table>';
		?>
		<script type="text/javascript">
	 		$(function(){
	 			$("body").on('click', '.del', function(){
					if(confirm("Deseja realmente apagar o cliente?")){
		 				var idcliente = $(this).attr('clid');
		 				
		 				$.post('delete.php', {id:idcliente, tipo:'deletecliente'}, function(data){
							alert(data.msg);
							$(this).parent().parent().remove();
		 	 			}, "json");
					}
	  			});
	 		});
		</script>
<?php include_once 'footer.php'; ?>