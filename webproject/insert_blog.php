<!DOCTYPE html>

<?php include("test_session.php"); ?>
<?php include("connexion_bdd.php"); ?>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  
  <body>
  
	<?php
	
	$req = $bdd->prepare('INSERT INTO blog(titre, descriptif, archive, dateblog) VALUES(:titre, :descriptif, :archive, :dateblog)');
	$req->execute(array(
		'titre' => $_POST['titre'],
		'descriptif' => $_POST['descriptif'],
		'archive' => $_POST['archive'],
		'dateblog' => $_POST['dateblog']
		));
		
	$req->closeCursor(); // Termine le traitement de la requête
	header ('location:message_ajout.php?type=blog');

	?>
	
  </body>
</html>
    