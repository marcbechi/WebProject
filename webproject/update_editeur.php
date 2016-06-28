<!DOCTYPE html>

<?php include("test_session.php"); ?>
<?php include("connexion_bdd.php"); ?>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  
  <body>
  
	<?php	
	
	$req = $bdd->prepare('UPDATE editeur 
						SET nom = :nom, url = :url, visible = :visible
						WHERE IDediteur = :IDediteur');
	$req->execute(array(
		'nom' => $_POST['nom'],
		'url' => $_POST['url'],
		'visible' => $_POST['visible'],
		'IDediteur' => $_POST['IDediteur']
		));
		
	$req->closeCursor(); // Termine le traitement de la requête
	header ('location:message_modifier.php?type=editeur');
	?>
	
  </body>
</html>
    