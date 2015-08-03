<?php
	require_once 'conecta.php';
	include_once 'header.php';
		
	if($_SESSION['dadoslogin']['usuario_tipo']=='F'){
		header('Location: dashboard.php');
	}
?>
		<h2 id="tables-hover-rows">Usuarios</h2>
		
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
						echo '</tr>';
				}
					echo '</tbody>';
			echo '</table>';
		?>
<?php include_once 'footer.php'; ?>