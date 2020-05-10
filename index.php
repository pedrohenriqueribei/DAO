<?php 

	
	require_once ("config.php");

	$user = new Usuario();

	$user->loadById(12);

	echo $user;






/*
ANTIGO
AGORA ESTÁ USANDO A CLASSE USUARIO

	$dao = new DAO();

	$usuarios = $dao->SELECT("SELECT * FROM tb_usuario");

	echo json_encode($usuarios);
 */
 ?>