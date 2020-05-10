<?php 
	$conn = new PDO ("mysql:dbname=dbphp7;host=localhost","root","root");

	$stmt = $conn->prepare("DELETE FROM tb_usuario WHERE id_usuario = :ID");

	$id = 13;

	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Usuario nº". $id." excluido com sucesso";

?>