<?php 
	$conn = new PDO ("mysql:dbname=dbphp7;host=localhost","root","root");

	$stmt = $conn->prepare("UPDATE tb_usuario SET nome = :NOME, senha = :PASSWORD WHERE id_usuario = :ID");

	$id = 10;
	$nome = "Josiane";
	$password = "pastora";

	$stmt->bindParam(":NOME", $nome);
	$stmt->bindParam(":PASSWORD", $password);
	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Dados alterados";
 ?>