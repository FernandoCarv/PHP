<?php
	require_once 'conecta.php';
	include_once 'header.php';
		
	if($_SESSION['dadoslogin']['usuario_tipo']=='F'){
		header('Location: dashboard.php');
	}
?>
		<center><h2>Resumo de usuários cadastrados</h2></center>
		<div class="form-group">
			<div>
			<br>
		    	<a href="cadastra_usuario.php" type="button" class="btn btn-default btn-lg">
		    		<span class="glyphicon glyphicon-file" aria-hidden="true"></span> Cadastrar novo usuário
				</a>
			</div>
		</div>
		<?php
			echo '<table class="table table-hover">';
				echo '<thead>';
					echo '<tr>';
						echo '<th>ID</th>';
						echo '<th>Tipo</th>';
						echo '<th>Nome</th>';
						echo '<th>CPF</th>';
						echo '<th>Tel Res</th>';
						echo '<th>Tel Cel</th>';
						echo '<th>Endereço</th>';
						echo '<th>Dt Nasc</th>';
						echo '<th>Sexo</th>';
						echo '<th>Email</th>';
						echo '<th>Login</th>';
						echo '<th>Senha</th>';
					echo '</tr>';
				echo '</thead>';
				echo '<tbody>';
				
					// query que busca todos os dados da tabela USUARIO
					$sql = mysql_query("SELECT * FROM usuario");
					while ($row = mysql_fetch_assoc($sql)) {
						echo '<tr>';
							echo '<td>' . $row['usuario_id'] . '</td>';
							echo '<td>' . $row['usuario_tipo'] . '</td>';
							echo '<td>' . $row['usuario_nome'] . '</td>';
							echo '<td>' . $row['usuario_cpf'] . '</td>';
							echo '<td>' . $row['usuario_telefone_res'] . '</td>';
							echo '<td>' . $row['usuario_telefone_cel'] . '</td>';
							echo '<td>' . $row['usuario_endereco'] . '</td>';
							echo '<td>' . $row['usuario_data_nasc'] . '</td>';
							echo '<td>' . $row['usuario_sexo'] . '</td>';
							echo '<td>' . $row['usuario_email'] . '</td>';
							echo '<td>' . $row['usuario_login'] . '</td>';
							echo '<td>' . $row['usuario_senha']. '</td>';
							echo '<td><a href="usuario_detalhes.php?id='.$row['usuario_id'].'"><span class="view glyphicon glyphicon-search" clid="'.$row['usuario_id'].'"></span></a>';
							echo '<td><a href="usuario_update.php?id='.$row['usuario_id'].'"><span class="edit glyphicon glyphicon-pencil" clid="'.$row['usuario_id'].'"></span></a>';
							echo '<td><a href=""><span class="del glyphicon glyphicon-trash" cliente_id="'.$row['usuario_id'].'"></span></a></td>';							
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
					if(confirm("Deseja realmente apagar o usuario?")){
		 				var idusuario = $(this).attr('usuario_id');
		 				
		 				$.post('delete.php', {id:idusuario, tipo:'deleteusuario'}, function(data){
							alert(data.msg);
						}, "json");
		 				$(this).parents("tr").first().remove();
					}
	  			});
	 		}); 		
		</script>		
<?php include_once 'footer.php'; ?>