<!DOCTYPE html>

<?php include("test_session.php"); ?>

<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="styles/admin.css" media="all" />
		<link rel="stylesheet" type="text/css" href="loading.css" media="all" />
		<meta http-equiv="refresh" content="3;url=admin_<?php echo $_GET['type']; ?>.php" />
	</head>

	<body>
		<fieldset>
			<legend><h3>Redirection</h3></legend>
			<h4 style="text-align:center;">
				Votre  <?php echo $_GET['type']; ?> a bien été ajouté!
				<div id="floatingCirclesG">
					<div class="f_circleG" id="frotateG_01"></div>
					<div class="f_circleG" id="frotateG_02"></div>
					<div class="f_circleG" id="frotateG_03"></div>
					<div class="f_circleG" id="frotateG_04"></div>
					<div class="f_circleG" id="frotateG_05"></div>
					<div class="f_circleG" id="frotateG_06"></div>
					<div class="f_circleG" id="frotateG_07"></div>
					<div class="f_circleG" id="frotateG_08"></div>
				</div>
			</h4>				
		</fieldset>  
	</body>
</html>
	