<html>
<head>
	<title>Relatório de Nível de Usuário</title>
	<meta charset="utf-8">
	<style type="text/css">
		table {
			width:100%;
			border:0;
		}
		table thead tr th, table tbody tr td {
			border: 0;
		}

		table thead tr th {
			background-color: #DDD;
			border-bottom:3px solid #000;
		}
		table tbody tr td {
			border-bottom:1px solid #000;
		}

		@media print {
			a:{
				display:none;
			}
		}

	</style>
</head>
<body>
	<a href ="#" onclick="window.print();">Imprimir</a>
	<h1>Relatório de Nívei de Usuário</h1>
	<table border="1">
		<thead>
			<tr>
				<th align="left">ID</th>
				<th align="left">Descrição</th>
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
					</tr>
					';
				}
			?>
		</tbody>
		<tfoot>
			<tr>
				<td>Impresso em <?=date("d/m/Y H:i:s")?></td>
			</tr>
		</tfoot>
	</table>
</body>
</html>