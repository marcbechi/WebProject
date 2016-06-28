	<?php include("connexion_bdd.php"); ?>
	
	<footer class="footer">
		<div class="container text-center">
		  <div class="row">
			<div class="col-lg-12">
			  <div class="col-md-4 hidden-sm hidden-xs">
			  	<h3>Editeurs</h3>
				<ul class="nav">
				
					<?php
						$reponse = $bdd->query('SELECT * FROM editeur 
												WHERE visible = 1													
												ORDER BY nom');
						while ($donnees = $reponse->fetch())
						{
							?>
							<li><a href="<?php echo $donnees['url'];?>"> <?php echo $donnees['nom'];?> </a></li>
							<?php
						}
						$reponse->closeCursor(); // Termine le traitement de la requête
					?>	
					
				</ul>
			  </div>
			  <div class="col-md-4 hidden-sm hidden-xs">
			  	<h3>Auteurs</h3>
				<ul class="nav">
				
					<?php
						$reponse = $bdd->query('SELECT * FROM auteur 
												WHERE visible = 1													
												ORDER BY prenom, nom');
						while ($donnees = $reponse->fetch())
						{
							?>
							<li><a href="<?php echo $donnees['url'];?>"> <?php echo $donnees['prenom'];?> <?php echo $donnees['nom'];?></a></li>
							<?php
						}
						$reponse->closeCursor(); // Termine le traitement de la requête
					?>

				</ul>
			  </div>
			  <div class="col-md-4">
				<ul class="nav">
					<li><h3><a href="#">Haut de la page&nbsp;</a><h3></li>
					<li><h3><a href="#">Me contacter</a><h3></li>
					<li><h4><a href="#">&nbsp;</a><h4></li>
					<li>
						<ul class="list-inline">
							<li><a href="http://www.facebook.fr"><img src="./images/iconsocial/facebook-24.png" alt="facebook"></a></li>
							<li><a href="http://www.twitter.fr"><img src="./images/iconsocial/twitter-24.png" alt="twitter"></a></li>  
							<li><a href="http://www.googleplus.fr"><img src="./images/iconsocial/google-plus-24.png" alt="googleplus"></a></li>
							<li><a href="htpp://www.linkedin.fr"><img src="./images/iconsocial/linkedin-24.png" alt="Linkedin"></a></li>
							<li><a href="http://www.amazon.fr"><img src="./images/iconsocial/amazon-24.png" alt="Amazon"></a></li> 
						</ul>
					</li>						
					
				</ul>							  	
			  </div> 
			</div>
		  </div>
			<hr class="featurette -divider">
			<div class="row">
				<div class="col-lg-12">
					<ul class="list-inline">
						<li>&copy; 2015 Tous droits réservés </li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	
	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

