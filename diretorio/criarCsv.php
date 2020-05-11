<?php 
	require_once("config.php");

	$dao = new DAO();

	$usuarios = $dao->select("SELECT * FROM tb_usuario");

	$herders = array();

	foreach ($usuarios[0] as $key => $value) {
		array_push($herders, $key);
	}

	$arquivo = fopen("usuarios.csv", "w+");

	fwrite($arquivo, implode(",", $herders)."\r\n");

	foreach ($usuarios as $linha) {
		$valor = array();

		foreach ($linha as $key => $value) {
			array_push($valor, $value);
		}

		fwrite($arquivo, implode(",", $valor)."\r\n");
	}






	fclose($arquivo);
 ?>