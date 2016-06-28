	<!-- header -->
 	<?php include("connexion_bdd.php"); ?>
	<?php include("header.php"); ?>
  

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">	  
		<?php
			$nb = 0;
			$reponse = $bdd->query('SELECT * FROM livre 
									WHERE nouveau = 1
									ORDER BY titre');
			while ($donnees = $reponse->fetch())
			{
				?>
				<li data-target="#myCarousel" data-slide-to="<?php echo $nb;?>" <?php if($nb==0){?> class="active" <?php } ?> ></li>
				<?php
				$nb = $nb + 1;
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
		?>	
      </ol>
	  
      <div class="carousel-inner" role="listbox"> 
		<?php
			$nb = 1;
			$reponse = $bdd->query('SELECT * FROM livre 
									WHERE nouveau = 1
									ORDER BY titre');
			while ($donnees = $reponse->fetch())
			{
				?>
				<div class="item <?php if($nb==1){?> active <?php } ?>">
				  <div class="container">
					<div class="carousel-caption">
					  <a href="#new<?php echo $nb;?>"> <img height="250" src="<?php echo $donnees['urlmediumvignette'];?>"> </a>
					  <h2><?php echo $donnees['titre'];?></h2>
					</div>
				  </div>
				</div>
				<?php
				$nb = $nb + 1;
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
		?>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
      <hr class="featurette	-divider">
    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">  
	    <div class="col-md-6">
			<img class="img-circle" src="./images/plume.png" alt="Generic placeholder image" width="140" height="140">
			<h2><a href="#new3">Dédicaces</a></h2>
			<p class="lead">
				Merci de naviguer sur site internet que j'ai fait à l'occasion du projet Web
			</p>
        </div><!-- /.col-lg-4 -->
		<div class="col-md-6">
			<img class="img-circle" src="./images/auteur.jpg" alt="Generic placeholder image" width="140" height="140">
			<h2><a href="#new3">Prochains évènements</a></h2>
			<p class="lead">
				Le Jeu du Pendu en JAVA !!!
			</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->
	  
		<?php
			$nb = 1;
			$reponse = $bdd->query('SELECT livre.*, categorielivre.nom FROM livre 
									INNER JOIN categorielivre 
									ON livre.IDcategorie = categorielivre.IDcategorie 
									WHERE livre.nouveau = 1
									ORDER BY titre');
			while ($donnees = $reponse->fetch())
			{
				?>
				<hr class="featurette	-divider">
				  <a id="new<?php echo $nb;?>"></a>
				  <div class="row featurette">
					<div class="col-md-7 col-md-push-5">
					  <h2 class="featurette-heading"> <?php echo $donnees['titre'];?> <span class="text-muted"> - Catégorie "<?php echo $donnees['nom'];?>" </span></h2>
					  <p class="lead"> <?php echo $donnees['descriptif'];?> </p>
					</div>
					<div class="col-md-5 col-md-pull-7">
						<img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="<?php echo $donnees['urlmediumvignette'];?>" alt="Generic placeholder image">
				   </div>
				  </div>
				<?php
				$nb = $nb + 1;
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
		?>
		
	  <br>
      <!-- /END THE FEATURETTES -->

	</div><!-- /.container -->
	
	<!-- FOOTER -->
 	<?php include("footer.php"); ?>
	
  </body>
</html>
