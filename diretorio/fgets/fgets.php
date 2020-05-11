<?php 

	$arquivo = "usuarios.csv";

	if(file_exists($arquivo)){

		$file = fopen($arquivo, "r");

		$header = explode(",", fgets($file));

		$dados = array();

		while($linha = fgets($file)){

			$dadosLinha = explode(",", $linha);
			$linhas = array();

			for ($i = 0; $i < count($header); $i++){

				$linhas[$header[$i]] = $dadosLinha[$i];
			}

			array_push($dados, $linhas);
		}
	}

	fclose($file);

	echo json_encode($dados);

 ?>