<?php
	require_once("conecta.php");
	include_once 'header.php'; 

// query que busca todos os dados da tabela USUARIO
$consulta_usuario = mysql_query("SELECT * FROM usuarios");
//$resultado = mysql_query($consulta,$conexao) or die ("Erro na seleção da tabela.");
?>

<html>
	<head>
		<title>Dashboard</title>
	</head>
	<body>
		<h2 id="tables-hover-rows">Hover rows</h2>
		<table class="table table-hover">
  			      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
		</table>
	</body>
</html>
<?php include_once 'footer.php'; ?>