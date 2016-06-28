<!DOCTYPE html>

<?php include("test_session.php"); ?>
<?php include("connexion_bdd.php"); ?>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  
  <body>
  
	<?php
	
	$req = $bdd->prepare('DELETE FROM membre WHERE IDmembre = :IDmembre');
	$req->execute(array(
		'IDmembre' => $_GET["IDmembre"]
		));
		
	$req->closeCursor(); // Termine le traitement de la requête
	header ('location:message_supprimer.php?type=membre');
	?>
	
  </body>
</html>
    