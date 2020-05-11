<?php 
	
	//w escrever + criar o arquivo
	$arquivo = fopen("log.txt", "w+");

	fwrite($arquivo, date("Y-m-d H:i:s"));

	fclose($arquivo);

	echo "Arquivo criado com sucesso";
 ?>