	<!-- header -->
 	<?php include("header.php"); ?>
	<?php include("connexion_bdd.php"); ?>
		 

    <hr class="featurette-divider">
	<div class="container marketing">
  
      <div class="row">
        <div class="col-sm-2 blog-main">
		</div>
        <div class="col-sm-8 blog-main">
		
			<?php
				$reponse = $bdd->query('SELECT * FROM blog 
										WHERE archive = 0
										ORDER BY dateblog DESC');
				while ($donnees = $reponse->fetch())
				{
					?>
					<div class="blog-post">
						<h2 class="blog-post-title bg-danger"> <?php echo $donnees['titre']; ?> </h2>
						
						<?php
							$txt  = $donnees['dateblog'];
							$date = DateTime::createFromFormat('Y-m-d', $txt);
						?>
						<p class="blog-post-meta"> <?php echo 'Posté le '.$date->format('d/m/Y'); ?> </p>

						<p> <?php echo $donnees['descriptif']; ?> </p>
						</div><!-- /.blog-post -->
					<hr class="featurette-divider">
					
					<?php
				}
				$reponse->closeCursor(); // Termine le traitement de la requête
			?>						

         <!-- <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>-->

        </div><!-- /.blog-main -->


      </div><!-- /.row -->

    </div><!-- /.container -->


	<!-- FOOTER -->
 	<?php include("footer.php"); ?>
