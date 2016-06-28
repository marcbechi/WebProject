<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		
		<?php
			$nom="";
			$prenom="";
			$url="";
			$visible="";
		
			if(isset($_GET["nom"])){
				$nom = $_GET["nom"];
			}
			
			if(isset($_GET["prenom"])){
				$prenom = $_GET["prenom"];
			}
			
			if(isset($_GET["url"])){
				$url = $_GET["url"];
			}
			
			if(isset($_GET["visible"])){
				$visible = $_GET["visible"];
			}
		?>

	</body>

</html>