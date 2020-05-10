<?php 
	$conn = new PDO ("mysql:dbname=dbphp7;host=localhost","root","root");

	$stmt = $conn->prepare("SELECT * FROM tb_usuario");

	$stmt->execute();

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	var_dump($results);
 ?>