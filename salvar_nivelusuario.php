<?php

$id = $_POST["id"];
$descricao = $_POST["descricao"];

	if ($descricao == "") {
	echo "O campo descrição é obrigado";
	exit;
	}	

	if (strlen($descricao) < 3) {
	echo "O campo descrição precisa ter pelo menos 3 caracteres";
	exit;
	}

$conexao = new PDO("mysql:host=localhost;dbname=modelagem;port=3306","root","89163438");

if (isset($id)) {
	if (is_numeric($id)) {
		if ($id > 0 ) {
			$instrucaoSQL = "UPDATE nivelusuario SET descricao = '{$descricao}' WHERE id = ".$id;
		} else {
			$instrucaoSQL = "INSERT INTO nivelusuario (descricao) VALUES ('{$descricao}');";
		}
	
	}else{
		echo 'Parametro inválido';
		exit;
	}	
}else {
	echo 'Indentificador do registro não foi encontrado.';
	exit;
}
	$result = $conexao->exec($instrucaoSQL);

if ($result == true) {
	echo 'Salvo com sucesso';	
}else{
	echo 'Erro ao salvar';
}