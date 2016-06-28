<!DOCTYPE html>

<?php include("test_session.php"); ?>
<?php include("connexion_bdd.php"); ?>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  
  <body>
  
	<?php
	move_uploaded_file($_FILES['vignette']['tmp_name'], 'images/vignettes/'.basename($_FILES['vignette']['name']));
	move_uploaded_file($_FILES['mediumvignette']['tmp_name'], 'images/medium_vignettes/'.basename($_FILES['mediumvignette']['name']));
	
	$req = $bdd->prepare('INSERT INTO livre(titre, descriptif, synopsis, IDcategorie, nouveau, urlvignette, urlmediumvignette) VALUES(:titre, :description, :synopsis, :IDcategorie, :nouveau, :urlvignette, :urlmediumvignette)');
	$req->execute(array(
		'titre' => $_POST['titre'],
		'description' => $_POST['description'],
		'synopsis' => $_POST['synopsis'],
		'IDcategorie' => $_POST['categorie'],
		'nouveau' => $_POST['nouveau'],
		'urlvignette' => 'images/vignettes/'.basename($_FILES['vignette']['name']),
		'urlmediumvignette' => 'images/medium_vignettes/'.basename($_FILES['mediumvignette']['name'])
		));
		
	$req->closeCursor(); // Termine le traitement de la requête
	header ('location:message_ajout.php?type=livre');
	?>
	
  </body>
</html>
    