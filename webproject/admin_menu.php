<!DOCTYPE html>

<?php include("connexion_bdd.php"); ?>
<?php include("test_session.php"); ?>

<html>
	<head>
		<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="./styles/admin_new.css"/>
			<link rel="stylesheet" href="./style.css" />
			<title> Menu - Admin </title>
		</head>

		<body>

			<ul class="bar">
				<li class="first"> <strong> Back Office </strong> </li>
				<li><a class="active" href="./admin_menu.php">Menu</a></li>
				<li><a href="./admin_livre.php">Livres</a></li>
				<li><a href="./admin_membre.php">Membres</a></li>
				<li><a href="./admin_blog.php">Blogs</a></li>
				<li><a href="./admin_editeur.php">Editeurs</a></li>
				<li><a href="./admin_auteur.php">Auteurs</a></li>
				<li class="last"><a href="./admin_deconnexion.php"> <span class="icon-exit"> </span> </a></li>
                <li><a href="index.php">Retour au site</a></li>
				<li class="pseudo"> <?php echo $_SESSION['login']; ?> </li>
			</ul>

			<div class="container">
				<h1>Gestion :</h1>
				<li><a href="./admin_livre.php">Livres</a></li>
				<li><a href="./admin_membre.php">Membres</a></li>
				<li><a href="./admin_blog.php">Blogs</a></li>
				<li><a href="./admin_editeur.php">Editeurs</a></li>
				<li><a href="./admin_auteur.php">Auteurs</a></li>
				<li><a href="./admin_lecture.php">Lectures Gratuites</a></li>
			</div>

		</body>
</html>
	