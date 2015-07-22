<?php
	require_once 'conecta.php';
	include_once 'header.php';
	
	if($_SESSION['dadoslogin']['usuario_tipo']=='G'){
		header('Location: dashboard.php');
	}
?>

<html>
	<head>
		<title>Clientes</title>
	</head>
	<body>
		<h2 id="tables-hover-rows">Clientes</h2>
		
		<?php
			echo '<table class="table table-hover">';
				echo '<thead>';
					echo '<tr>';
						echo '<th>ID</th>';
						echo '<th>Tipo</th>';
						echo '<th>Nome</th>';
						echo '<th>CPF</th>';
						echo '<th>CNPJ</th>';
						echo '<th>Dt Nasc</th>';
						echo '<th>Endereço</th>';
						echo '<th>Tel Res</th>';
						echo '<th>Tel Cel</th>';
						echo '<th>Email</th>';
						echo '<th>Senha</th>';
					echo '</tr>';
				echo '</thead>';
				echo '<tbody>';
				
					// query que busca todos os dados da tabela USUARIO
					$sql = mysql_query("SELECT * FROM cliente");
					//var_dump($usuarios);
					while ($row = mysql_fetch_assoc($sql)) {
						echo '<tr>';
							echo '<td>' . $row['cliente_id'] . '</td>';
							echo '<td>' . $row['cliente_tipo'] . '</td>';
							echo '<td>' . $row['cliente_nome'] . '</td>';
							echo '<td>' . $row['cliente_cpf'] . '</td>';
							echo '<td>' . $row['cliente_cnpj'] . '</td>';
							echo '<td>' . $row['cliente_dt_nasc'] . '</td>';
							echo '<td>' . $row['cliente_endereco'] . '</td>';
							echo '<td>' . $row['cliente_telefone_res'] . '</td>';
							echo '<td>' . $row['cliente_telefone_celular'] . '</td>';
							echo '<td>' . $row['cliente_email'] . '</td>';
							echo '<td>' . $row['cliente_senha'] . '</td>';
						echo '</tr>';
				}
					echo '</tbody>';
			echo '</table>';
		?>
	</body>
</html>
<?php include_once 'footer.php'; ?>