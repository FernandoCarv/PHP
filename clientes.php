<?php
	include_once 'conecta.php';
	include_once 'header.php';
?>
		<center><h2>Resumo de clientes cadastrados</h2></center>
		<div class="form-group">
			<div>
			<br>
		    	<a href="cadastra_cliente.php" type="button" class="btn btn-default btn-lg">
		    		<span class="glyphicon glyphicon-file" aria-hidden="true"></span> Cadastrar novo cliente
				</a>
			</div>
		</div>
		
		<?php	echo '<table class="table table-hover">';
					echo '<thead>';
						echo '<tr>';
							echo '<th>ID</th>';
							echo '<th>Nome Completo</th>';
							echo '<th>Tipo</th>';							
							echo '<th>Razão Social</th>';
							echo '<th></th>';
						echo '</tr>';
					echo '</thead>';
					echo '<tbody>';
					// query que busca todos os dados da tabela CLIENTE
					$sql = mysql_query("SELECT
							cliente_id,
							cliente_nome,
							case
								when cliente_tipo = 'F' then 'Pessoa Física'
								when cliente_tipo = 'J' then 'Pessoa Jurídica'
							end as cliente_tipo,
							cliente_razao_social
    						FROM cliente");
					
					while ($row = mysql_fetch_assoc($sql)) {
						echo '<tr>';
							echo '<td>' . $row['cliente_id'] . '</td>';
							echo '<td>' . $row['cliente_nome'] . '</td>';
							echo '<td>' . $row['cliente_tipo'] . '</td>';
							echo '<td>' . $row['cliente_razao_social'] . '</td>';
							echo '<td><a href="cliente_detalhes.php?id='.$row['cliente_id'].'"><span class="view glyphicon glyphicon-search" clid="'.$row['cliente_id'].'"></span></a>';
							echo '<td><a href="cliente_update.php?id='.$row['cliente_id'].'"><span class="edit glyphicon glyphicon-pencil" clid="'.$row['cliente_id'].'"></span></a>';
							echo '<td><a href=""><span class="del glyphicon glyphicon-trash" cliente_id="'.$row['cliente_id'].'"></span></a></td>';							
						echo '</tr>';
					}
					echo '</tbody>';
			echo '</table>';
		?>
		<script type="text/javascript">
	 		$(function(){
	 			$('.del').on('click', function(e){
	 				e.preventDefault();
	 				e.stopPropagation();
					if(confirm("Deseja realmente apagar o cliente?")){
		 				var idcliente = $(this).attr('cliente_id');
		 				
		 				$.post('delete.php', {id:idcliente, tipo:'deletecliente'}, function(data){
							alert(data.msg);
						}, "json");
		 				$(this).parents("tr").first().remove();
					}
	  			});
	 		}); 		
		</script>
<?php include_once 'footer.php'; ?>