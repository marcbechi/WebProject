<!DOCTYPE html>

<?php include("connexion_bdd.php"); ?>
<?php include("test_session.php"); ?>
<?php include("recherche_auteur.php"); ?>

<html>
	<head>
		<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="./styles/admin_new.css"/>	
			<link rel="stylesheet" href="./style.css" />
			<title> Auteurs - Admin </title>
		</head>

		<body>

			<ul class="bar">
				<li class="first"> <strong>  Back Office </strong> </li>
				<li><a href="./admin_menu.php">Menu</a></li>
				<li><a href="./admin_livre.php">Livres</a></li>
				<li><a href="./admin_membre.php">Membres</a></li>
				<li><a href="./admin_blog.php">Blogs</a></li>
				<li><a href="./admin_editeur.php">Editeurs</a></li>
				<li><a class="active" href="./admin_auteur.php">Auteurs</a></li>
				<li class="last"><a href="./admin_deconnexion.php"> <span class="icon-exit"> </span> </a></li>
                <li><a href="index.php">Retour au site</a></li>
				<li class="pseudo"> <?php echo $_SESSION['login']; ?> </li>
			</ul>

			<div class="container_2">
			
				<h1 class="inline">Auteurs :</h1>
				<a href="admin_auteur_new.php" class="button inline"> <span class="icon-note_add"> </span>  Ajouter</a>
				
				<div class="datagrid"><table class="fixe">
					<thead>
						<tr>
							<th></th>
							<th>Nom</th>
							<th>Prénom</th>
							<th>Site Internet</th>
							<th>Visible</th>
						</tr>
					</thead>
						
					<tbody>					
					
						<?php
							$reponse = $bdd->query('SELECT * FROM auteur 
													WHERE nom LIKE \'%'.$nom.'%\' 
													AND prenom LIKE \'%'.$prenom.'%\' 
													AND url LIKE \'%'.$url.'%\'
													AND visible LIKE \'%'.$visible.'%\'
													ORDER BY nom, prenom');
							$alt = 0;
							while ($donnees = $reponse->fetch())
							{
								?>
								<tr <?php if($alt == 1){ echo 'class="alt"'; }?> >
									<td class="centrer"> 
									
										<!-- LIEN MODIFIER -->
										<form id="update_<?php echo $donnees['IDauteur'];?>" method="post" action="admin_auteur_update.php">
											<input type='hidden' name="IDauteur" value="<?php echo $donnees['IDauteur'];?>"/>
											<input type='hidden' name="nom" value="<?php echo $donnees['nom'];?>"/>
											<input type='hidden' name="prenom" value="<?php echo $donnees['prenom'];?>"/>
											<input type='hidden' name="url" value="<?php echo $donnees['url'];?>"/>
											<input type='hidden' name="visible" value="<?php echo $donnees['visible'];?>"/>
										</form>
										<a href="#"  onclick="document.getElementById('update_<?php echo $donnees['IDauteur'];?>').submit(); return false;"> 
												<span class="icon-pencil"> </span> Modifier 
										</a>
										
										<!-- LIEN SUPPRIMER -->
										<a href="delete_auteur.php?IDauteur=<?php echo $donnees['IDauteur']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet auteur : <?php echo $donnees['nom']; ?> <?php echo $donnees['prenom']; ?> ?');"> 
											<span class="icon-bin"> </span> Supprimer 
										</a>										
									</td>
									<td> <?php echo $donnees['nom']; ?> </td>
									<td> <?php echo $donnees['prenom']; ?> </td>
									<td> <?php echo $donnees['url']; ?> </td>
									<td> <?php if($donnees['visible'] == 1){
											echo 'Oui'; 
										} 
										else {
											echo 'Non';
										}
										?> 
									</td>
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