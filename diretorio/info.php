<?php 

	$arquivos = scandir("classes");

	$dados = array();

	foreach ($arquivos as $arq) {
		
		if (!in_array($arq, array(".","..")))
		{
			$arquivo = "classes" . DIRECTORY_SEPARATOR . $arq;

			$info = pathinfo($arquivo);

			$info["size"] = filesize($arquivo);
			$info["modified"] = date("d/m/Y H:i:s", filemtime($arquivo));
			$info["url"] = "http://localhost/diretorio/" . str_replace("\\", "/", $arquivo);

			array_push($dados, $info); 
		}
	}


	echo json_encode($dados);





 ?>