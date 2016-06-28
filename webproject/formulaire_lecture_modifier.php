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
	
		
		<form id="form_1089110" class="appnitro" enctype="multipart/form-data" method="post" action="update_lecture.php">
					<div class="form_description">
			<h2>"Lecture" à Modifier</h2>
			<p></p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="titre">Titre :</label>
		<div>
			<input id="element_1" name="titre" class="element text medium" type="text" maxlength="255" value="<?php echo $_POST["titre"]; ?>" required/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="description">Description :</label>
		<div>
			<textarea id="element_2" name="description" class="element textarea medium" required><?php echo $_POST["description"]; ?></textarea> 
		</div>
		</li>		<li id="li_2" >
		<label class="description" for="url">PDF : Garder ce PDF <i>"<?php echo basename($_POST['url']); ?>"</i> ou le changer </label>
		<div>
			<input type='hidden' name="old_url" value="<?php echo $_POST['url'];?>"/>
			<input id="element_2" name="url" class="element file" type="file" accept="application/pdf"/> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="visible">Visible : </label>
		<span>
			<input id="element_7_1" name="visible" class="element radio" type="radio" value="1" <?php if($_POST["visible"]==1){?> checked="checked" <?php } ?> />
			<label class="choice" for="element_7_1">Oui</label>
			<input id="element_7_2" name="visible" class="element radio" type="radio" value="0" <?php if($_POST["visible"]==0){?> checked="checked" <?php } ?> />
			<label class="choice" for="element_7_2">Non</label>

		</span> 
		</li>		
		<li class="buttons">
		<input type='hidden' name="IDlecture" value="<?php echo $_POST['IDlecture'];?>"/>		
		<input id="saveForm" class="button_text" type="submit" name="submit" value="Modifier" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>