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
	
		
		<form id="form_1089110" class="appnitro" enctype="multipart/form-data" method="post" action="update_membre.php">
					<div class="form_description">
			<h2>"Membre" à Modifier</h2>
			<p></p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="nom">Nom :</label>
		<div>
			<input id="element_1" name="nom" class="element text medium" type="text" maxlength="255" value="<?php echo $_POST["nom"]; ?>" required/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="prenom">Prénom :</label>
		<div>
			<input id="element_2" name="prenom" class="element text medium" type="text" maxlength="255" value="<?php echo $_POST["prenom"]; ?>" required/>  
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="mail">E-mail :</label>
		<div>
			<input id="element_4" name="mail" class="element text medium" type="email" maxlength="255" value="<?php echo $_POST["mail"]; ?>" required/>  
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="password">Password :</label>
		<div>
			<input id="element_5" name="password" class="element text medium" type="text" maxlength="255" value="<?php echo $_POST["password"]; ?>" required/>  
		</div>
		</li>		
		<li class="buttons">
		<input type='hidden' name="IDmembre" value="<?php echo $_POST['IDmembre'];?>"/>		
		<input id="saveForm" class="button_text" type="submit" name="submit" value="Modifier" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>