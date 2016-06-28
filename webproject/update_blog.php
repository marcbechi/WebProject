<!DOCTYPE html>

<?php include("test_session.php"); ?>
<?php include("connexion_bdd.php"); ?>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  
  <body>
  
	<?php	
	
	$req = $bdd->prepare('UPDATE blog 
						SET titre = :titre, descriptif = :descriptif, archive = :archive, dateblog = :dateblog
						WHERE IDblog = :IDblog');
	$req->execute(array(
		'titre' => $_POST['titre'],
		'descriptif' => $_POST['descriptif'],
		'archive' => $_POST['archive'],
		'dateblog' => $_POST['dateblog'],
		'IDblog' => $_POST['IDblog']
		));
		
	$req->closeCursor(); // Termine le traitement de la requête
	header ('location:message_modifier.php?type=blog');
	?>
	
  </body>
</html>
    