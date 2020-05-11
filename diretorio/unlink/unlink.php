<?php 
	$arquivo = fopen("12345.txt", "w+");

	fclose($arquivo);

	unlink("12345.txt");

	echo "arquivo removido com sucesso";
 ?>