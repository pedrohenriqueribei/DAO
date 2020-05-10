<?php 

	require_once ("config.php");

	$dao = new DAO();

	$usuarios = $dao->SELECT("SELECT * FROM tb_usuario");

	echo json_encode($usuarios);
 ?>