<!DOCTYPE html>

<?php include("test_session.php"); ?>
<?php include("connexion_bdd.php"); ?>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  
  <body>
  
	<?php
	
	$req = $bdd->prepare('DELETE FROM editeur WHERE IDediteur = :IDediteur');
	$req->execute(array(
		'IDediteur' => $_GET["IDediteur"]
		));
		
	$req->closeCursor(); // Termine le traitement de la requête
	header ('location:message_supprimer.php?type=editeur');
	?>
	
  </body>
</html>
    