<?php
	require_once "conecta.php";
	include_once 'header.php';
	
	if($_SESSION['dadoslogin']['usuario_tipo']=='G'){
		header('Location: dashboard.php');
	}
?>

<html>
<head>
<title>Produtos</title>
</head>
<body>
	<h2 id="tables-hover-rows">Produtos</h2>
		
		<?php
			echo '<table class="table table-hover">';
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
				
					// query que busca todos os dados da tabela USUARIO
					$sql = mysql_query("SELECT 
										    produto_id,
											categoria.categoria_id,
										    categoria_descricao,
										    produto_nome,
										    produto_fabricante,
										    produto_detalhe,
										    produto_quantidade,
										    produto_valor
										FROM
										    produto,
										    categoria");
					
					while ($row = mysql_fetch_assoc($sql)) {
						echo '<tr>';
							echo '<td>' . $row['produto_id'] . '</td>';
							echo '<td>' . $row['categoria_descricao'] . '</td>';
							echo '<td>' . $row['produto_nome'] . '</td>';
							echo '<td>' . $row['produto_fabricante'] . '</td>';
							echo '<td>' . $row['produto_detalhe'] . '</td>';
							echo '<td>' . $row['produto_quantidade'] . '</td>';
							echo '<td>' . $row['produto_valor'] . '</td>';
						echo '</tr>';
				}
					echo '</tbody>';
			echo '</table>';
		?>
	</body>
</html>
<?php include_once 'footer.php'; ?>