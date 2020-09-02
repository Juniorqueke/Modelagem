<?php
	$conexao = new PDO("mysql:host=localhost;dbname=modelagem;port=3306","root","89163438");

	//Modo de edição
	if (isset($_GET['id'])){
		$id = $_GET['id'];

		$sql = "SELECT descricao FROM nivelusuario WHERE id = " . $id ." LIMIT 1;";
		$rs = $conexao->query($sql);
		if($linha = $rs->fetch()){
			$descricao = $linha["descricao"];
		} else {
			echo "Nenhum registro encontrado";
			exit;
		}

	//Modo de inserção
	} else {
		$id = 0;
		$descricao = "";
	}

?>

<html>
	<head>
		<title>Nivel de Usuario</title>
	</head>
	<body>
		<a href="listar_nivelusuario.php">Voltar</a>>
		<form onsubmit="return validar();" action ="salvar_nivelusuario.php" method="POST">
			<fieldset>
				<input type="hidden" id="id" name="id" value="<?=$id?>" />
				<legend>Nivel de Usuario </legend>
				<label for="descricao">Descricao</label>
				<input type="text" id="descricao" name="descricao" value="<?=$descricao?>" />
				<input type="submit" id="salvar" value="Salvar" /> 
			</fieldset>
		</form>
		<script type="text/javascript">
			function validar(){
				var descricao = document.getElementById("descricao");

				if (descricao.value == "") {
					descricao.style.backgroundColor = "#FF8C00";
					descricao.style.color = "#FFFFFF"
					descricao.focus();
					return false;
				}
				if (descricao.value.length < 3) {
					alert("O campo descricao precisa ter no mínimo 3 caracteres.");
					return false;
				}
				return true;
			}	
		</script>
	</body>
</html>