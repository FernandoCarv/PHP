<?php
	include_once 'conecta.php';
	include_once 'header.php';
?>
		<center><h2>Resumo de produtos cadastrados</h2></center>
		<div class="form-group">
			<div>
			<br>
		    	<a href="cadastra_produto.php" type="button" class="btn btn-default btn-lg">
		    		<span class="glyphicon glyphicon-file" aria-hidden="true"></span> Cadastrar novo produto
				</a>
			</div>
		</div>
		<?php	echo '<table class="table table-hover">';
					echo '<thead>';
						echo '<tr>';
							echo '<th>ID</th>';
							echo '<th>Categoria</th>';
							echo '<th>Nome</th>';
							echo '<th>Fabricante</th>';
							echo '<th>Detalhes</th>';
							echo '<th>Qtd</th>';
							echo '<th>Valor</th>';
						echo '</tr>';
					echo '</thead>';
					echo '<tbody>';
					
						// query que busca todos os dados da tabela PRODUTO
						$sql = mysql_query("SELECT 
											    a.produto_id,
												b.categoria_id,
											    b.categoria_descricao,
											    a.produto_nome,
											    a.produto_fabricante,
											    a.produto_detalhe,
											    a.produto_quantidade,
											    a.produto_valor
											FROM
											    produto a
											LEFT JOIN
											    categoria b
											ON
												a.categoria_id = b.categoria_id");
						
						while ($row = mysql_fetch_assoc($sql)) {
							echo '<tr>';
								echo '<td>' . $row['produto_id'] . '</td>';
								echo '<td>' . $row['categoria_descricao'] . '</td>';
								echo '<td>' . $row['produto_nome'] . '</td>';
								echo '<td>' . $row['produto_fabricante'] . '</td>';
								echo '<td>' . $row['produto_detalhe'] . '</td>';
								echo '<td>' . $row['produto_quantidade'] . '</td>';
								echo '<td>' . $row['produto_valor'] . '</td>';
								echo '<td><a href="produto_detalhes.php?id='.$row['produto_id'].'"><span class="view glyphicon glyphicon-search" pid="'.$row['produto_id'].'"></span></a>';
								echo '<td><a href="produto_update.php?id='.$row['produto_id'].'"><span class="edit glyphicon glyphicon-pencil" pid="'.$row['produto_id'].'"></span></a>';
								echo '<td><a href=""><span class="del glyphicon glyphicon-trash" produto_id="'.$row['produto_id'].'"></span></a></td>';							
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
					if(confirm("Deseja realmente apagar o produto?")){
		 				var idproduto = $(this).attr('produto_id');
		 				
		 				$.post('delete.php', {id:idproduto, tipo:'deleteproduto'}, function(data){
							alert(data.msg);
						}, "json");
		 				$(this).parents("tr").first().remove();
					}
	  			});
	 		}); 		
		</script>
<?php include_once 'footer.php'; ?>