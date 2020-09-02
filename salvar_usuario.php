<?php
	$nome = $_POST["nome"];
	$login = $_POST["login"];
	$nivel = $_POST["nivel"];
	$senha = md5( $_POST["senha"]);

	if ($nome == "") {
		echo 'Nome é obrigatório';
		exit;
	}

	if ($login == "") {
		echo 'Login é obrigatório';
		exit;
	}

	if ($nivel == "") {
		echo 'Nivel de usuário é obrigatório';
		exit;
	}

	if ($senha == "") {
		echo 'Senha  é obrigatória';
		exit;
	}

	$conexao = new PDO("mysql:host=localhost;dbname=modelagem;port=3306","root","89163438");
	$instrucaoSQL = "INSERT INTO usuario VALUES (default,'{$nome}','{$login}','{$senha}',{$nivel});";

	$result = $conexao->exec($instrucaoSQL);

	if ($result){
		echo "Salvo com sucesso";
	}else{
		echo "Erro ao salvar";
	}

