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
	
		
		<form id="form_1089110" class="appnitro" enctype="multipart/form-data" method="post" action="insert_blog.php">
					<div class="form_description">
			<h2>"Blog" à Ajouter</h2>
			<p></p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="titre">Titre :</label>
		<div>
			<input id="element_1" name="titre" class="element text medium" type="text" maxlength="255" value="" required/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="descriptif">Description :</label>
		<div>
			<textarea id="element_2" name="descriptif" class="element textarea medium" required></textarea> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="archive">Archivé : </label>
		<span>
			<input id="element_7_1" name="archive" class="element radio" type="radio" value="1" />
			<label class="choice" for="element_7_1">Oui</label>
			<input id="element_7_2" name="archive" class="element radio" type="radio" value="0" checked="checked"/>
			<label class="choice" for="element_7_2">Non</label>

		</span> 
		</li>		<li id="li_8" >
		<label class="description" for="dateblog">Date de création : </label>
		<div>
			<?php $date = date("Y-m-d");?>
			<input id="element_8" name="dateblog" class="element medium" type="date" class="recherche" title="Date (aaaa-mm-jj)" placeholder="aaaa-mm-jj" pattern="(19|20)\d\d[\-](0[1-9]|1[012])[\-](0[1-9]|[12][0-9]|3[01])" value="<?php echo $date;?>" required/></textarea> 
		</div>
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