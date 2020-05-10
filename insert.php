<?php 
	$conn = new PDO ("mysql:dbname=dbphp7;host=localhost","root","root");

	$stmt = $conn->prepare("INSERT INTO tb_usuario (nome, senha) values (:LOGIN, :PASSWORD)");

	$login = "José";
	$password = "7777777";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);

	$stmt->execute();
 ?>