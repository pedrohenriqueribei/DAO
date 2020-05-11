<?php 

	$cep = "72318121";

	$link = "https://viacep.com.br/ws/$cep/json/";

	$ch = curl_init($link);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	$response = curl_exec($ch);

	curl_close($ch);

	$dados = json_decode($response, true);

	print_r($dados);

	$bairro = $dados["bairro"];


echo "BAIRRO: " . $bairro;




	$logradouro = $dados["logradouro"];
	echo "LOGRADOURO: " . $logradouro;
 ?>

