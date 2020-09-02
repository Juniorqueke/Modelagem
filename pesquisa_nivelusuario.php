<html>
	<head>
		<title>Pesquisa de Nivel de Usuário</title>
	</head>
	<body>
		<form action="listar_nivelusuario.php" method="POST" target="resultado">
			<fieldset>
				<legend>Pesquisa</legend>
				<label  for="id">ID</label>
				<input type="id="id="id" name="id" />
				<label for = "descricao">Descrição</label>
				<input type="text"id="descricao" name="descricao"  />
				<input type="submit" value="Pesquisar">
			</fieldset>
		</form>
		<iframe id="resultado" name="resultado" src="listar_nivelusuario.php" frameborder="0"></iframe>

	</body>
</html>