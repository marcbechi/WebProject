<!DOCTYPE html>

<?php include("connexion_bdd.php"); ?>
<?php include("test_session.php"); ?>
<?php include("recherche_livre.php"); ?>

<html>
	<head>
		<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="./styles/admin_new.css"/>	
			<link rel="stylesheet" href="./style.css" />
			<title> Livres - Admin </title>
		</head>

		<body>

			<ul class="bar">
				<li class="first"> <strong> Back Office </strong> </li>
				<li><a href="./admin_menu.php">Menu</a></li>
				<li><a class="active" href="./admin_livre.php">Livres</a></li>
				<li><a href="./admin_membre.php">Membres</a></li>
				<li><a href="./admin_blog.php">Blogs</a></li>
				<li><a href="./admin_editeur.php">Editeurs</a></li>
				<li><a href="./admin_auteur.php">Auteurs</a></li>
				<li class="last"><a href="./admin_deconnexion.php"> <span class="icon-exit"> </span> </a></li>
                <li><a href="index.php">Retour au site</a></li>
				<li class="pseudo"> <?php echo $_SESSION['login']; ?> </li>
			</ul>

			<div class="container_2">
			
				<h2 class="inline">Livres :</h2>
				<a href="admin_livre_new.php" class="button inline"> <span class="icon-note_add"> </span>  Ajouter</a>
				
				<div class="datagrid"><table class="fixe">
					<thead>
						<tr>
							<th></th>
							<th>Titre</th>
							<th>Description</th>
							<th>Synopsis</th>
							<th>Catégorie</th>
							<th>Nouveau</th>
							<th>Url Vignette</th>
							<th>Url Medium Vignette</th>
						</tr>
						
						
					</thead>
						
					<tbody>					
					
						<?php
							$reponse = $bdd->query('SELECT livre.*, categorielivre.nom FROM livre 
													INNER JOIN categorielivre 
													ON livre.IDcategorie = categorielivre.IDcategorie 
													WHERE livre.titre LIKE \'%'.$titre.'%\' 
													AND livre.descriptif LIKE \'%'.$description.'%\'
													AND livre.synopsis LIKE \'%'.$synopsis.'%\'
													AND categorielivre.IDcategorie LIKE \'%'.$categorie.'%\'
													AND livre.nouveau LIKE \'%'.$nouveau.'%\'
													AND livre.urlvignette LIKE \'%'.$vignette.'%\'
													AND livre.urlmediumvignette LIKE \'%'.$medium_vignette.'%\'
													ORDER BY titre');
							$alt = 0;
							while ($donnees = $reponse->fetch())
							{
								?>
								<tr <?php if($alt == 1){ echo 'class="alt"'; }?> >
									<td class="centrer"> 
									
										<!-- LIEN MODIFIER -->
										<form id="update_<?php echo $donnees['IDlivre'];?>" method="post" action="admin_livre_update.php">
											<input type='hidden' name="IDlivre" value="<?php echo $donnees['IDlivre'];?>"/>
											<input type='hidden' name="titre" value="<?php echo $donnees['titre'];?>"/>
											<input type='hidden' name="description" value="<?php echo $donnees['descriptif'];?>"/>
											<input type='hidden' name="synopsis" value="<?php echo $donnees['synopsis'];?>"/>
											<input type='hidden' name="categorie" value="<?php echo $donnees['nom'];?>"/>
											<input type='hidden' name="nouveau" value="<?php echo $donnees['nouveau'];?>"/>
											<input type='hidden' name="vignette" value="<?php echo $donnees['urlvignette'];?>"/>
											<input type='hidden' name="medium_vignette" value="<?php echo $donnees['urlmediumvignette'];?>"/>
										</form>
										<a href="#"  onclick="document.getElementById('update_<?php echo $donnees['IDlivre'];?>').submit(); return false;"> 
												<span class="icon-pencil"> </span> Modifier 
										</a>
										
										<!-- LIEN SUPPRIMER -->
										<a href="delete_livre.php?IDlivre=<?php echo $donnees['IDlivre']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce livre : <?php echo $donnees['titre']; ?> ?');"> 
											<span class="icon-bin"> </span> Supprimer 
										</a>										
									</td>
									<td> <?php echo $donnees['titre']; ?> </td>
									<td> <?php echo $donnees['descriptif']; ?> </td>
									<td> <?php echo $donnees['synopsis']; ?> </td>
									<td> <?php echo $donnees['nom']; ?> </td>
									<td> <?php if($donnees['nouveau'] == 1){
											echo 'Oui'; 
										} 
										else {
											echo 'Non';
										}
										?> 
									</td>
									<td> <?php echo $donnees['urlvignette']; ?> </td>
									<td> <?php echo $donnees['urlmediumvignette']; ?> </td>
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