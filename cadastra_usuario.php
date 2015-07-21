<?php include_once 'header.php';?>
Cadastro de Usuario

<?php
	require_once("valida_sessao.php");
	//var_dump($_SESSION['dadoslogin']);
	//echo "TESTE";
?>

<html>
	<head>
		<title>Cadastro Usuário</title>
	</head>
	<body>
		<form method="post">
			<table>
				<tr>
					<td><input type="text" name="first_name" placeholder="First Name" required /></td>
				</tr>
				<tr>
					<td><input type="text" name="last_name" placeholder="Last Name" required /></td>
				</tr>
				<tr>
					<td><input type="text" name="city_name" placeholder="City" required /></td>
				</tr>
				<tr>
					<td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
				</tr>
			</table>
		</form>

	</body>
</html>

<?php include_once 'footer.php'; ?>