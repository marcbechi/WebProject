<!DOCTYPE html>

<?php include("test_session.php"); ?>
<?php include("connexion_bdd.php"); ?>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  
  <body>
  
	<?php	
	
	$req = $bdd->prepare('UPDATE membre 
						SET nom = :nom, prenom = :prenom, mail = :mail, password = :password
						WHERE IDmembre = :IDmembre');
	$req->execute(array(
		'nom' => $_POST['nom'],
		'prenom' => $_POST['prenom'],
		'mail' => $_POST['mail'],
		'password' => $_POST['password'],
		'IDmembre' => $_POST['IDmembre']
		));
		
	$req->closeCursor(); // Termine le traitement de la requête
	header ('location:message_modifier.php?type=membre');
	?>
	
  </body>
</html>
    