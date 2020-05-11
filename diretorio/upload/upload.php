<form method="POST" enctype="multipart/form-data">
	
	<input type="file" name="fileUpload">

	<button type="submit">Enviar</button>

</form>


<?php 

	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$fileTemp = $_FILES["fileUpload"];

		if($fileTemp["error"]){

			throw new Exception("Error: " . $fileTemp["error"]);
			
		}

		$dirUploads = "Arquivos de Upload";

		if (!is_dir($dirUploads)){
			mkdir($dirUploads);
		}

		if (move_uploaded_file($fileTemp["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $fileTemp["name"])) {
			echo "Upload realizado com sucesso";
		}
		else {
			throw new Exception("Não foi possível realizar o upload");
			
		}
	}



 ?>