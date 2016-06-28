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
    

    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./bootstrap/css/navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	
	
	<link rel="stylesheet" type="text/css" href="./styles/admin.css" media="all" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Administration</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="./admin_.php">Home</a></li>
            <li><a href="#about">Livres</a></li>
            <li><a href="#contact">Membres</a></li>
			<li><a href="#contact">Blogs</a></li>
			<li><a href="#contact">Editeurs</a></li>
			<li><a href="#contact">Auteurs</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		<?php	
		if (isset($_POST["login"]) && isset($_POST["password"])) {	
		   // requete avec paramètres afin d'éviter les injections sql, surtout pour de l'authentification
		   $req = $bdd->prepare('SELECT nom FROM administration WHERE nom = :nom AND password=:password');
		   //$req->execute(array($_POST['nom'],$_POST['password']));
		   $req->execute(array(':nom' => $_POST['login'], ':password' => $_POST['password']));
		   // compte le nombre d'occurences trouvées
		   $nb = $req->rowCount();
		   if ($nb==0) {
			   	echo '<h1>Mauvais login ou mot de passe !</h1>';
		   }
		   else {
				// demarre la session
				session_start();
				// déclaration d'une variable de session
				$_SESSION["login"] = $_POST["login"];
				echo '<h1>Bienvenue '.$_POST["login"].'</h1>';
				echo '<h2>Gestion  : </h2>';
				echo '<ul>';
				echo '<li><a href="testsession.php">Exemple de test de la session</a></li>';	
				echo '<li><a href="adminactu.php">Actualités</a></li>';			
				echo '<li><a href="adminblog.php">Blog</a></li>';		
				echo '<li><a href="adminlivre.php">Livres</a></li>';	
				echo '<li><a href="admincategorie.php">Catégories livres</a></li>';	
				echo '<li><a href="adminmembre.php">Membres</a></li>';	
				echo '<li><a href="adminediteur.php">Editeurs</a></li>';				
				echo '<li><a href="adminauteur.php">Auteurs</a></li>';
				echo '</ul>';				
			}
			$req->closeCursor();
			
			}
		?>



    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./scripts/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
