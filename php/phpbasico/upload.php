<?php 
	if ($_FILES) {

		if((($_FILES["archivo"]["type"] == "image/png")
		||  ($_FILES["archivo"]["type"] == "image/jpeg"))
		&&  ($_FILES["archivo"]["size"] < 80000)) {

			if($_FILES["archivo"]["error"] > 0) {
				echo "Error: ".$_FILES["archivo"]["error"]."<br>";
			}
			else {

				if(file_exists("subir/".$_FILES["archivo"]["name"])) {
					echo $_FILES["archivo"]["name"]." El archivo ya existe.";
				} else {
				move_uploaded_file($_FILES["archivo"]["tmp_name"],
				"subir/".$_FILES["archivo"]["name"]);
				echo "Archivo almacenado en: subir/".$_FILES["archivo"]["name"];
			}

			}
		} else {
				echo "Archivo Invalido!";
		}
	}
?>