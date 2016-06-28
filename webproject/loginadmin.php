<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<link rel="stylesheet" type="text/css" href="./styles/admin.css" media="all" />
	</head>
	<body>
		<?php
			if(isset($_GET["mdp"])){
				echo '<h2 style="text-align:center;"> Login ou Mot de Passe incorrect! </h2>';
			}
		?>

		<form name="admin" action="admin_connexion.php" method="post">
			<fieldset>
				<legend>Administration backoffice du site</legend>
				<p>
					<label for="login">Login</label>
					<input id="login" name="login"  autofocus="" required="">
				</p>
				<p>
					<label for="message">Mot de passe</label>
					<input id="password" name="password"  autofocus="" required="" type="password">
				</p>
				<p style="text-align:center;"	>
					<input class="button" type="submit" value="Connexion"> 
				</p>				
			</fieldset>
		</form>

	</body>

</html>