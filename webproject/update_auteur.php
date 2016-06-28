<!DOCTYPE html>

<?php include("test_session.php"); ?>
<?php include("connexion_bdd.php"); ?>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  
  <body>
  
	<?php	
	
	$req = $bdd->prepare('UPDATE auteur 
						SET nom = :nom, prenom = :prenom, url = :url, visible = :visible
						WHERE IDauteur = :IDauteur');
	$req->execute(array(
		'nom' => $_POST['nom'],
		'prenom' => $_POST['prenom'],
		'url' => $_POST['url'],
		'visible' => $_POST['visible'],
		'IDauteur' => $_POST['IDauteur']
		));
		
	$req->closeCursor(); // Termine le traitement de la requête
	header ('location:message_modifier.php?type=auteur');
	?>
	
  </body>
</html>
    