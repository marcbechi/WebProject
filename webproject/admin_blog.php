<!DOCTYPE html>

<?php include("connexion_bdd.php"); ?>
<?php include("test_session.php"); ?>
<?php include("recherche_blog.php"); ?>

<html>
	<head>
		<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="./styles/admin_new.css"/>	
			<link rel="stylesheet" href="./style.css" />
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
                <li><a href="index.php">Retour au site</a></li>
				<li class="pseudo"> <?php echo $_SESSION['login']; ?> </li>
			</ul>

			<div class="container_2">
			
				<h1 class="inline">Blogs :</h1>
				<a href="admin_blog_new.php" class="button inline"> <span class="icon-note_add"> </span>  Ajouter</a>
				
				<div class="datagrid"><table class="fixe">
					<thead>
						<tr>
							<th></th>
							<th>Titre</th>
							<th>Description</th>
							<th>Archivé</th>
							<th>Date de création</th>
						</tr>
						
					</thead>
						
					<tbody>					
					
						<?php
							$reponse = $bdd->query('SELECT * FROM blog 
													WHERE titre LIKE \'%'.$titre.'%\' 
													AND descriptif LIKE \'%'.$descriptif.'%\' 
													AND archive LIKE \'%'.$archive.'%\'
													AND dateblog LIKE \'%'.$dateblog.'%\'													
													ORDER BY titre');
							$alt = 0;
							while ($donnees = $reponse->fetch())
							{
								?>
								<tr <?php if($alt == 1){ echo 'class="alt"'; }?> >
									<td class="centrer"> 
									
										<!-- LIEN MODIFIER -->
										<form id="update_<?php echo $donnees['IDblog'];?>" method="post" action="admin_blog_update.php">
											<input type='hidden' name="IDblog" value="<?php echo $donnees['IDblog'];?>"/>
											<input type='hidden' name="titre" value="<?php echo $donnees['titre'];?>"/>
											<input type='hidden' name="descriptif" value="<?php echo $donnees['descriptif'];?>"/>
											<input type='hidden' name="archive" value="<?php echo $donnees['archive'];?>"/>
											<input type='hidden' name="dateblog" value="<?php echo $donnees['dateblog'];?>"/>											
										</form>
										<a href="#"  onclick="document.getElementById('update_<?php echo $donnees['IDblog'];?>').submit(); return false;"> 
												<span class="icon-pencil"> </span> Modifier 
										</a>
										
										<!-- LIEN SUPPRIMER -->
										<a href="delete_blog.php?IDblog=<?php echo $donnees['IDblog']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce blog : <?php echo $donnees['titre']; ?> ?');"> 
											<span class="icon-bin"> </span> Supprimer 
										</a>										
									</td>
									<td> <?php echo $donnees['titre']; ?> </td>
									<td> <?php echo $donnees['descriptif']; ?> </td>
									<td> <?php if($donnees['archive'] == 1){
											echo 'Oui'; 
										} 
										else {
											echo 'Non';
										}
										?> 
									</td>
									<td> <?php echo $donnees['dateblog']; ?> </td>
								</tr>
								<?php
								$alt = ($alt + 1) %2;
							}
							$reponse->closeCursor(); // Termine le traitement de la requête
						?>						
					</tbody>
				</table></div>
				
			</div>

		</body>
</html>	