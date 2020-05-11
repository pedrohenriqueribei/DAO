<?php 

	if(!is_dir("documentos")) {
		mkdir("documentos");
	}

	foreach (scandir("documentos") as $item) 
	{
		if(!in_array($item, array(".","..")))
		{
			unlink("documentos/" . $item);
		}
	}

	echo "Arquivos da pasta foram apagados"



 ?>