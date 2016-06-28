<!DOCTYPE html>

<?php include("connexion_bdd.php"); ?>
<?php include("test_session.php"); ?>

<html>
		<head>
			<meta charset="UTF-8">				
			<link rel="stylesheet" type="text/css" href="./styles/admin_new.css"/>				
			<title> Blogs - Admin </title>
		</head>

		<body>

			<ul class="bar">
				<li class="first"> <strong>  Back Office </strong> </li>
				<li><a href="./admin_menu.php">Menu</a></li>
				<li><a href="./admin_livre.php">Livres</a></li>
				<li><a href="./admin_membre.php">Membres</a></li>
				<li><a class="active" href="./admin_blog.php">Blogs</a></li>
				<li><a href="./admin_editeur.php">Editeurs</a></li>
				<li><a href="./admin_auteur.php">Auteurs</a></li>
				<li class="last"><a href="./admin_deconnexion.php"> <span class="icon-exit"> </span> </a></li>
				<li class="pseudo"> <?php echo $_SESSION['login']; ?> </li>
			</ul>
			
			<div class="formulaire">
				<?php include("formulaire_blog_modifier.php"); ?>
			</div>

		</body>
</html>
	