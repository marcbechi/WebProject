<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		
		<?php
			$nom="";
			$prenom="";
			$mail="";
			$password="";
		
			if(isset($_GET["nom"])){
				$nom = $_GET["nom"];
			}
			
			if(isset($_GET["prenom"])){
				$prenom = $_GET["prenom"];
			}
			
			if(isset($_GET["mail"])){
				$mail = $_GET["mail"];
			}
			
			if(isset($_GET["password"])){
				$password = $_GET["password"];
			}
		?>

	</body>

</html>