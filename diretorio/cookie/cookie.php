<?php 

	$data = array(
			"Empresa"=>"Jetro",
			"Cidade"=>"P Sul",
			"Proprietário"=>"Bruno"
		);

	setcookie("cookie_jetro", json_encode($data), time()+3600);

	echo "OK"






 ?>