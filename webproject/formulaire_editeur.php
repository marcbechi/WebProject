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
	
		
		<form id="form_1089110" class="appnitro" enctype="multipart/form-data" method="post" action="insert_editeur.php">
					<div class="form_description">
			<h2>"Editeur" à Ajouter</h2>
			<p></p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="nom">Nom :</label>
		<div>
			<input id="element_1" name="nom" class="element text medium" type="text" maxlength="255" value="" required/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="url">Site Internet :</label>
		<div>
			<input id="element_2" name="url" class="element text medium" type="url" maxlength="255" value="" required/>  
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="visible">Visible : </label>
		<span>
			<input id="element_7_1" name="visible" class="element radio" type="radio" checked="checked" value="1" />
			<label class="choice" for="element_7_1">Oui</label>
			<input id="element_7_2" name="visible" class="element radio" type="radio" value="0"/>
			<label class="choice" for="element_7_2">Non</label>

		</span> 
		</li>
		<li class="buttons">
		<input id="saveForm" class="button_text" type="submit" name="submit" value="Ajouter" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>