<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  
  <body>
	<?php 
	session_start();
 
	if (!isset($_SESSION["login"])){
		// si vous ouvrez un nouveau navigateur http://localhost/webproject/testsession.php sans s'être connecté
		header ('location:attention.php');
		//echo('<h1>Rien à faire ici !</h1>');
	}
	else
	{
	    echo('<h1>Bienvenue '.$_SESSION["login"].'</h1>');
	}
	
	?>
  
  </body>
</html>
    