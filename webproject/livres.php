<!DOCTYPE html>
<?php include("connexion_bdd.php"); ?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon2.ico">
    <title>Alfred de Musset</title>
    <!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!--<link href="bootstrap/css/carousel.css" rel="stylesheet">-->
	<!-- Custom styles for this template -->
    <link href="styles/sticky-footer-navbar.css" rel="stylesheet">
		<!-- carrousel jquery slick -->
	<link rel="stylesheet" type="text/css" href="./slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"/>
  </head>
  

  <body>
  <!-- NAVBAR  ============================== -->
	  <h1 class="auteur text-center">Alfred de MUSSET</h1>
	  <!-- Fixed navbar -->
	  <nav class="navbar navbar-default" id="main_menu">
		<div class="container-fluid">
			 <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
			  <ul class="nav navbar-nav">
				<li><a href="index.php">ACTUALITES</a></li>
				<li><a href="livres.php">LIVRES</a></li>
				<li><a href="blog.php">BLOG</a></li>   
				<li><a href="biographie.php">L'AUTEUR</a></li>      
				<li><a href="membre.php">ESPACE MEMBRE</a></li> 				
			  </ul>
			</div><!--/.nav-collapse -->
	  </div>
	</nav>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
	<hr class="featurette-divider">
    <div class="container marketing">
         <div class="slidernews"> 
			<?php
				$IDlivre="";
				$reponse = $bdd->query('SELECT * FROM livre 
										ORDER BY titre');
				while ($donnees = $reponse->fetch())
				{
					?>
					<div><a href="livres.php?IDlivre=<?php echo $donnees['IDlivre'];?>"><img height="230" src="<?php echo $donnees['urlmediumvignette'];?>" alt="nouveau livre"></a></div>
					<?php
					if ($IDlivre==""){$IDlivre = $donnees['IDlivre'];}
				}
				$reponse->closeCursor(); // Termine le traitement de la requête
			?>
		</div>
		
		<?php
			if(isset($_GET["IDlivre"])){
				$IDlivre = $_GET["IDlivre"];
			}
		?>
		
		<?php
			$reponse = $bdd->query('SELECT livre.*, categorielivre.nom FROM livre 
									INNER JOIN categorielivre 
									ON livre.IDcategorie = categorielivre.IDcategorie 
									WHERE IDlivre = '.$IDlivre);
			while ($donnees = $reponse->fetch())
			{
				?>
					<hr class="featurette -divider">
					  <!--ancre interne pour se positionner avec href="#new1"-->
					  <a id="new1"></a>
					  <div class="row featurette">
						<div class="col-md-7 col-md-push-5">
						  <h2 class="featurette-heading"> <?php echo $donnees['titre'];?> <span class="text-muted"> - Catégorie "<?php echo $donnees['nom'];?>" </span></h2>
						  <p class="lead"> <?php echo $donnees['descriptif'];?> </p>
						</div>
						<div class="col-md-5 col-md-pull-7">
							<img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="<?php echo $donnees['urlvignette'];?>" alt="Generic placeholder image">
					   </div>
					   <div class="col-md-12">
						  <h2 class="featurette-heading">Synopsis</h2>
						  <p class="lead"> <?php echo $donnees['synopsis'];?> </p>
						</div>
					  </div>
				<?php
			}
			$reponse->closeCursor(); // Termine le traitement de la requête
		?>
		
    </div><!-- /.container -->
	
	
	
	<!-- FOOTER -->
 	<?php include("footer.php"); ?>
	
	<!-- carrousel jquery slick -->
	<script type="text/javascript" src="slick/slick.min.js"></script>
	<script type="text/javascript">
			$(document).ready(function(){
			  $('.slidernews').slick({
				infinite:true,
				slidesToShow:4,
				slidesToScroll:2});
			});
	</script>
	<!-- fin carrousel jquery slick -->

  </body>
</html>
