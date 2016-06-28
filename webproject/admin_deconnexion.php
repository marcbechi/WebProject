<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  
  <body>
	<?php 
	session_start();
 
	session_destroy();
		
	header ('location:loginadmin.php');
	?>
  
  </body>
</html>
    