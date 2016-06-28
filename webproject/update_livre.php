<!DOCTYPE html>

<?php include("test_session.php"); ?>
<?php include("connexion_bdd.php"); ?>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  
  <body>
  
	<?php
	if ($_FILES['vignette']['error'] == 4){
		$vignette = $_POST["old_vignette"];
	}
	else{
		move_uploaded_file($_FILES['vignette']['tmp_name'], 'images/vignettes/'.basename($_FILES['vignette']['name']));
		$vignette = 'images/vignettes/'.basename($_FILES['vignette']['name']);
	}
	
	if ($_FILES['mediumvignette']['error'] == 4){
		$mediumvignette = $_POST["old_mediumvignette"];
	}
	else{
		move_uploaded_file($_FILES['mediumvignette']['tmp_name'], 'images/medium_vignettes/'.basename($_FILES['mediumvignette']['name']));
		$mediumvignette = 'images/medium_vignettes/'.basename($_FILES['mediumvignette']['name']);
	}
	
	
	$req = $bdd->prepare('UPDATE livre 
						SET titre = :titre, descriptif = :description, synopsis = :synopsis, IDcategorie = :IDcategorie, nouveau = :nouveau, urlvignette = :urlvignette, urlmediumvignette = :urlmediumvignette
						WHERE IDlivre = :IDlivre');
	$req->execute(array(
		'titre' => $_POST['titre'],
		'description' => $_POST['description'],
		'synopsis' => $_POST['synopsis'],
		'IDcategorie' => $_POST['categorie'],
		'nouveau' => $_POST['nouveau'],
		'urlvignette' => $vignette,
		'urlmediumvignette' => $mediumvignette,
		'IDlivre' => $_POST['IDlivre']
		));
		
	$req->closeCursor(); // Termine le traitement de la requête
	header ('location:message_modifier.php?type=livre');
	?>
	
  </body>
</html>
    