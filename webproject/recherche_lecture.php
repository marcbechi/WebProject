<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		
		<?php
			$titre="";
			$description="";
			$url="";
			$visible="";
		
			if(isset($_GET["titre"])){
				$titre = $_GET["titre"];
			}
			
			if(isset($_GET["description"])){
				$description = $_GET["description"];
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