<!DOCTYPE html>

<?php include("test_session.php"); ?>
<?php include("connexion_bdd.php"); ?>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  
  <body>
  
	<?php
	move_uploaded_file($_FILES['url']['tmp_name'], 'PDF/'.basename($_FILES['url']['name']));
	
	$req = $bdd->prepare('INSERT INTO lecture(titre, description, url, visible) VALUES(:titre, :description, :url, :visible)');
	$req->execute(array(
		'titre' => $_POST['titre'],
		'description' => $_POST['description'],
		'url' => 'PDF/'.basename($_FILES['url']['name']),
		'visible' => $_POST['visible']
		));
		
	$req->closeCursor(); // Termine le traitement de la requête
	header ('location:message_ajout.php?type=lecture');

	?>
	
  </body>
</html>
    