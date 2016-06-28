<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		
		<?php
			$titre="";
			$description="";
			$synopsis="";
			$categorie="";
			$nouveau="";
			$vignette="";
			$medium_vignette="";
		
			if(isset($_GET["titre"])){
				$titre = $_GET["titre"];
			}
			
			if(isset($_GET["description"])){
				$description = $_GET["description"];
			}
			
			if(isset($_GET["synopsis"])){
				$synopsis = $_GET["synopsis"];
			}
			
			if(isset($_GET["categorie"])){
				$categorie = $_GET["categorie"];
			}
			
			if(isset($_GET["nouveau"])){
				$nouveau = $_GET["nouveau"];
			}
			
			if(isset($_GET["vignette"])){
				$vignette = $_GET["vignette"];
			}
			
			if(isset($_GET["medium_vignette"])){
				$medium_vignette = $_GET["medium_vignette"];
			}
		?>

	</body>

</html>