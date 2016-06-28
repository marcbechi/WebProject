<!DOCTYPE html>

<?php include("test_session.php"); ?>
<?php include("connexion_bdd.php"); ?>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  
  <body>
  
	<?php
	
	$req = $bdd->prepare('INSERT INTO auteur(nom, prenom, url, visible) VALUES(:nom, :prenom, :url, :visible)');
	$req->execute(array(
		'nom' => $_POST['nom'],
		'prenom' => $_POST['prenom'],
		'url' => $_POST['url'],
		'visible' => $_POST['visible']
		));
		
	$req->closeCursor(); // Termine le traitement de la requête
	header ('location:message_ajout.php?type=auteur');

	?>
	
  </body>
</html>
    