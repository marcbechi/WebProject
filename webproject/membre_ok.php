<?php 
	session_start();

	if (!isset($_SESSION["login"])){
		// si vous ouvrez un nouveau navigateur http://localhost/webproject/testsession.php sans s'être connecté
		header ('location:attention_membre.php');
		//echo('<h1>Rien à faire ici !</h1>');
	}
?>
<?php include("connexion_bdd.php"); ?>

<html>
	<head>
	</head>
	
	<body>
		<?php include("header.php"); ?>

			 <hr class="featurette-divider">
		<div class="container marketing">
			<div class="row">  
				<div style="text-align:center">
					<h1>Liste "Lectures Gratuites" :</h1>
					<?php
						$reponse = $bdd->query('SELECT * FROM lecture 
												WHERE visible = 1
												ORDER BY titre');
						while ($donnees = $reponse->fetch())
						{
							?>
							<a href="<?php echo $donnees['url'];?>" onclick="window.open(this.href); return false;"><h3> <?php echo $donnees['titre'];?> </h3></a>
							<?php
						}
						$reponse->closeCursor(); // Termine le traitement de la requête
					?>
				</div>
			</div>
		  <hr class="featurette -divider">
		  <!-- /END THE FEATURETTES -->
		</div><!-- /.container -->

		  <!-- FOOTER -->
		<?php include("footer.php"); ?>	
	 </body>
</html>