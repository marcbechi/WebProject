<!DOCTYPE html>

<?php include("test_session.php"); ?>
<?php include("connexion_bdd.php"); ?>

<html>
  <head>
    <meta charset="utf-8">
  </head>
  
  <body>
  
	<?php	
	
	if ($_FILES['url']['error'] == 4){
		$url = $_POST["old_url"];
	}
	else{
		move_uploaded_file($_FILES['url']['tmp_name'], 'PDF/'.basename($_FILES['url']['name']));
		$url = 'PDF/'.basename($_FILES['url']['name']);
	}
	
	$req = $bdd->prepare('UPDATE lecture 
						SET titre = :titre, description = :description, url = :url, visible = :visible
						WHERE IDlecture = :IDlecture');
	$req->execute(array(
		'titre' => $_POST['titre'],
		'description' => $_POST['description'],
		'url' => $url,
		'visible' => $_POST['visible'],
		'IDlecture' => $_POST['IDlecture']
		));
		
	$req->closeCursor(); // Termine le traitement de la requête
	header ('location:message_modifier.php?type=lecture');
	?>
	
  </body>
</html>
    