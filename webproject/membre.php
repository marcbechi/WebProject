<?php 
	session_start();

	if (isset($_SESSION["login"])){
		// si vous ouvrez un nouveau navigateur http://localhost/webproject/testsession.php sans s'être connecté
		header ('location:membre_ok.php');
		//echo('<h1>Rien à faire ici !</h1>');
	}
?>

	<?php include("header.php"); ?>

  		 <hr class="featurette-divider">
	<div class="container marketing">
		<div class="row">  
			<div class="col-md-6 col-md-push-6">
				<form class="form-horizontal col-lg-12" method="POST" action="login.php">
				  <div class="form-group">
					<legend>
						Vous êtes déja inscrit :
						<?php
							if(isset($_GET["pb"])){
								if($_GET["pb"]==1){
									?>
									<p style="color:red;"> E-mail ou Mot de Passe incorrect ! </p>
									<?php
								}
							}
						?>
					</legend>
				  </div>
				  <div class="row">
					<div class="form-group">
					  <label for="email1" class="col-lg-4 control-label">Votre e-mail : </label>
					  <div class="col-lg-6">
						<input type="email" class="form-control" name="mail" id="email1" required="">
					  </div>
					</div>
				  </div>
				  <div class="row">
					<div class="form-group">
					  <label for="motpasse" class="col-lg-4 control-label">Votre mot de passe : </label>
					  <div class="col-lg-6">
						<input type="password" class="form-control" name="password" id="motpasse" required="">
					  </div>
					</div>
				  </div>
				  <div class="form-group">
					<button class="pull-right btn btn-default">Connexion</button>
				  </div>
				</form>
			</div>
			<div class="col-md-6 col-md-pull-6">
				<form class="form-horizontal col-lg-12" method="POST" action="inscription.php">
				  <div class="form-group">
					<legend>
						Vous êtes nouveau ?
						<?php
							if(isset($_GET["pb"])){
								if($_GET["pb"]==2){
									?>
									<p style="color:red;"> Mot de Passe différent ! </p>
									<?php
								}
							}
						?>
					</legend>
				  </div>
				  <div class="row">
					<div class="form-group">
					  <label for="pseudo" class="col-lg-4 control-label">Votre nom : </label>
					  <div class="col-lg-6">
						<input type="text" class="form-control" name="nom" id="pseudo" required="">
					  </div>
					</div>
				  </div>
				  <div class="row">
					<div class="form-group">
					  <label for="prenom" class="col-lg-4 control-label">Votre prénom : </label>
					  <div class="col-lg-6">
						<input type="text" class="form-control" name="prenom" id="prenom" required="">
					  </div>
					</div>
				  </div>
				  <div class="row">
					<div class="form-group">
					  <label for="email2" class="col-lg-4 control-label">Votre e-mail : </label>
					  <div class="col-lg-6">
						<input type="email" class="form-control" name="mail" id="email2" required="">
					  </div>
					</div>
				  </div>
				  <div class="row">
					<div class="form-group">
					  <label for="motpasse2" class="col-lg-4 control-label">Votre mot de passe : </label>
					  <div class="col-lg-6">
						<input type="password" class="form-control" name="password" id="motpasse2" required="">
					  </div>
					</div>
				  </div>
				  <div class="row">
					<div class="form-group">
					  <label for="motpasse" class="col-lg-4 control-label">Confirmation du mot de passe : </label>
					  <div class="col-lg-6">
						<input type="password" class="form-control" name="password2" id="motpasse" required="">
					  </div>
					</div>
				  </div>
				  <div class="form-group">
					<button class="pull-right btn btn-default">Inscription</button>
				  </div>
				</form>
			</div>
		</div>
	  <hr class="featurette -divider">
      <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->

      <!-- FOOTER -->
	<?php include("footer.php"); ?>
	
	  </body>
</html>