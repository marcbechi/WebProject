<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->

<?php 
	if (!isset($_SESSION["login"])){
		// si vous ouvrez un nouveau navigateur http://localhost/webproject/testsession.php sans s'être connecté
		header ('location:attention.php');
		//echo('<h1>Rien à faire ici !</h1>');
	}
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		
		<form id="form_1089110" class="appnitro" enctype="multipart/form-data" method="post" action="insert_livre.php">
					<div class="form_description">
			<h2>"Livre" à Ajouter</h2>
			<p></p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="titre">Titre :</label>
		<div>
			<input id="element_1" name="titre" class="element text medium" type="text" maxlength="255" value="" required/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="description">Description :</label>
		<div>
			<textarea id="element_2" name="description" class="element textarea medium" required></textarea> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="synopsis">Synopsis :</label>
		<div>
			<textarea id="element_4" name="synopsis" class="element textarea medium" required></textarea> 
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="categorie">Categorie :</label>
		<div>
		<select class="element select medium" id="element_6" name="categorie" required> 
		<option value="" selected="selected"></option>
		
		<?php
					$reponse = $bdd->query('SELECT * FROM categorielivre ORDER BY nom');
					// On affiche chaque entrée une à une
					while ($donnees = $reponse->fetch())
					{
						?>
						<option value="<?php echo $donnees['IDcategorie']; ?>" ><?php echo $donnees['nom']; ?></option>
						<?php
					}
					$reponse->closeCursor(); // Termine le traitement de la requête
				?>
		</select>
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="nouveau">Nouveau : </label>
		<span>
			<input id="element_7_1" name="nouveau" class="element radio" type="radio" checked="checked" value="1" />
			<label class="choice" for="element_7_1">Oui</label>
			<input id="element_7_2" name="nouveau" class="element radio" type="radio" value="0"/>
			<label class="choice" for="element_7_2">Non</label>

		</span> 
		</li>		<li id="li_5" >
		<label class="description" for="vignette">Vignette :</label>
		<div>
			<input id="element_5" name="vignette" class="element file" type="file" accept="image/*" required/> 
		</div>  
		</li>		<li id="li_3" >
		<label class="description" for="mediumvignette">Vignette <i>(petite résolution)</i> :</label>
		<div>
			<input id="element_3" name="mediumvignette" class="element file" type="file" accept="image/*" required/> 
		</div>  
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1089110" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Ajouter" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>