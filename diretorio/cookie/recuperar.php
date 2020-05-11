<?php 

	if(isset($_COOKIE["cookie_jetro"])){

		$conj = array();

		$conj = json_decode($_COOKIE["cookie_jetro"], true);
	}

	print_r($conj);



	echo "CIDADE: " . $conj["Cidade"] . "/r";
	echo "PROPRIETÁRIO: " . $conj["Proprietário"];
 ?>