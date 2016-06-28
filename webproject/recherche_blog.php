<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		
		<?php
			$titre="";
			$descriptif="";
			$archive="";
			$dateblog="";
		
			if(isset($_GET["titre"])){
				$titre = $_GET["titre"];
			}
			
			if(isset($_GET["descriptif"])){
				$descriptif = $_GET["descriptif"];
			}
			
			if(isset($_GET["archive"])){
				$archive = $_GET["archive"];
			}
			
			if(isset($_GET["dateblog"])){
				$dateblog = $_GET["dateblog"];
			}
		?>

	</body>

</html>