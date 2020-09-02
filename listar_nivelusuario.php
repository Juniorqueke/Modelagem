<html>
<head>
	<title>Listar de Nível de Usuário</title>
	<meta charset="utf-8">
</head>
<body>
	<a href ="nivelUsuario.php">Novo</a>
	<table border="1">
		<thead>
			<tr>
				<th>ID</th>
				<th>Descrição</th>
				<th>Editar</th>
				<th>Excluir</th> 
			</tr>
		</thead>
		<tbody>
			<?php
			  // Conexão com o banco de dados
				$conexao = new PDO("mysql:host=localhost;dbname=modelagem;port=3306","root","89163438");

				$where = '';
				if (isset($_POST["id"])){
					$id = $_POST["id"]==""?0:$_POST["id"];
					if ($id > 0) {
						$where = $where . " AND id ($id)";					
					}
				}else {
					$id = 0;
				}

				if (isset($_POST["descricao"])) {
					$descricao = $_POST["descricao"];
					$where= $where . " AND  descricao LIKE '%($descricao)%'";
				} else {
					$descricao = '';
				}
				
				$sql = "SELECT * FROM nivelusuario WHERE 1=1 {$where};";
				
				// Dataset
				$resultSet = $conexao->query($sql);
				while($linha = $resultSet->fetch()){
					echo '
					<tr>
						<td>'.$linha["id"].'</td>
						<td>'.$linha["descricao"].'</td>
						<td><a href ="nivelusuario.php?id='.$linha["id"].'">Editar</a></td>
						<td><a onclick="excluir('.$linha["id"].')" href=#">Excluir</a></td>
					</tr>
					';
				}
			?>
		</tbody>
	</table>

	<script type="text/javascript">
	function excluir(id)	{
	 	if (confirm('Tem certeza que deseja excluir?')) {
	 		alert('Sim');
	 		window.location.href = "excluir_nivelusuario.php?id=" +id;
	 	} 
	}
</script>

</body>
</html>