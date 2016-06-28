<!DOCTYPE html>

<?php include("connexion_bdd.php"); ?>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  
  <body>
  
	<?php
	
	if ($_POST['password'] == $_POST['password2'])
	{
		$req = $bdd->prepare('INSERT INTO membre(nom, prenom, mail, password) VALUES(:nom, :prenom, :mail, :password)');
		$req->execute(array(
			'nom' => $_POST['nom'],
			'prenom' => $_POST['prenom'],
			'mail' => $_POST['mail'],
			'password' => $_POST['password']
			));
			
		$req->closeCursor(); // Termine le traitement de la requête
		header ('location:message_inscription.php');
	}
	else
    { 
		header ('location:membre.php?pb=2');
	}

	?>
	
  </body>
</html>
    