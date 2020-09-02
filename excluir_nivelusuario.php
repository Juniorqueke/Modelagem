<?php
	$conexao = new PDO ("mysql:host=localhost;dbname=modelagem;port=3306","root","89163438");
	$sql = "DELETE FROM nivelusuario WHERE id = " . $_GET["id"];
	if ($conexao->exec($sql)) {
		header('Location: listar_nivelusuario.php');
	} else{
		echo 'Erro ao excluir';
	}

